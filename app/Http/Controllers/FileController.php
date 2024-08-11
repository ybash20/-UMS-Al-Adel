<?php

namespace App\Http\Controllers;

use File;
use Image;
use Request;
use Response;
use Storage;
use Cache;
use Driver;

class FileController extends Controller
{
    public function getPreview($one, $two = null, $three = null, $four = null, $five = null)
    {

        if ($two) {
            $fullFilePath = 'uploads'.DIRECTORY_SEPARATOR.$one.DIRECTORY_SEPARATOR.$two;
            $filename = $two;
            if ($three) {
                $fullFilePath = 'uploads'.DIRECTORY_SEPARATOR.$one.DIRECTORY_SEPARATOR.$two.DIRECTORY_SEPARATOR.$three;
                $filename = $three;
                if ($four) {
                    $fullFilePath = 'uploads'.DIRECTORY_SEPARATOR.$one.DIRECTORY_SEPARATOR.$two.DIRECTORY_SEPARATOR.$three.DIRECTORY_SEPARATOR.$four;
                    $filename = $four;
                    if ($five) {
                        $fullFilePath = 'uploads'.DIRECTORY_SEPARATOR.$one.DIRECTORY_SEPARATOR.$two.DIRECTORY_SEPARATOR.$three.DIRECTORY_SEPARATOR.$four.DIRECTORY_SEPARATOR.$five;
                        $filename = $five;
                    }
                }
            }
        } else {
            $fullFilePath = 'uploads'.DIRECTORY_SEPARATOR.$one;
            $filename = $one;
        }

        $fullStoragePath = storage_path('app/'.$fullFilePath);
        $lifetime = 31556926; // One year in seconds



        if (! Storage::exists($fullFilePath)) {
            abort(404);
        }

        $handler = new \Symfony\Component\HttpFoundation\File\File(storage_path('app/'.$fullFilePath));

        $extension = strtolower(File::extension($fullStoragePath));
        $images_ext = config('ums.IMAGE_EXTENSIONS', 'jpg,png,gif,bmp');
        $images_ext = explode(',', $images_ext);
        $imageFileSize = 0;

        if (in_array($extension, $images_ext)) {
            $defaultThumbnail = config('ums.DEFAULT_THUMBNAIL_WIDTH');
            if ($defaultThumbnail != 0) {
                $w = Request::get('w') ?: $defaultThumbnail;
                $h = Request::get('h') ?: $w;
            } else {
                $w = Request::get('w');
                $h = Request::get('h') ?: $w;
            }

            // Define a unique cache key based on the image path and dimensions
            $cacheKey = md5($fullFilePath . '-' . $w . '-' . $h);

            // Use Laravel's cache system to store the processed image
            $imgRaw = Cache::rememberForever($cacheKey, function () use ($fullStoragePath, $w, $h) {
                $manager = new Image(new Driver());
                $im = $manager->read($fullStoragePath);
                if ($w) {
                    if (! $h) {
                        $im->resize($w);
                    } else {
                        $im->resize($w, $h);
                    }
                }
                // Encode the image to a string and return it
                return (string) $im->encode();
            });
            $manager = new Image(new Driver());
            $imageFileSize = mb_strlen($imgRaw, '8bit') ?: 0;
            $imgRaw = $manager->read($imgRaw); // Convert the cached string back to an image object
        }
        // Prepare some header variables
        $file_time = $handler->getMTime(); // Get the last modified time for the file (Unix timestamp)

        $header_content_type = $handler->getMimeType();
        $header_etag = md5($file_time . $fullFilePath);
        $header_last_modified = gmdate('r', $file_time);
        $header_expires = gmdate('r', $file_time + $lifetime);

        $headers = [
            'Content-Disposition' => 'inline; filename="' . $filename . '"',
            'Last-Modified' => $header_last_modified,
            'Cache-Control' => 'must-revalidate',
            'Expires' => $header_expires,
            'Pragma' => 'public',
            'Etag' => $header_etag,
        ];

        // Is the resource cached?
        $h1 = isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) && $_SERVER['HTTP_IF_MODIFIED_SINCE'] == $header_last_modified;
        $h2 = isset($_SERVER['HTTP_IF_NONE_MATCH']) && str_replace('"', '', stripslashes($_SERVER['HTTP_IF_NONE_MATCH'])) == $header_etag;

        // Add the Content-Type header for the response
        $headers['Content-Type'] = $header_content_type;

        if (in_array($extension, $images_ext)) {
            if ($h1 || $h2) {
                return Response::make('', 304, $headers); // File (image) is cached by the browser, so we don't have to send it again
            } else {
                return Response::make($imgRaw->encode(), 200, $headers); // Encode the image before sending
            }
        } else {
            if (Request::get('download')) {
                return Response::download($fullStoragePath, $filename, $headers);
            } else {
                return Response::file($fullStoragePath, $headers);
            }
        }
    }
}
