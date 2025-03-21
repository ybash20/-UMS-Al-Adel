<?php

namespace App\Helpers;

use App\Http\Middleware\UMSAuthAPI;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use DB;

class UMSRouter
{
    private static $ums_namespace = '\App\Http\Controllers';

    public static function getUMSControllerFiles()
    {
        $controllers = glob(__DIR__ . '/../Http/Controllers/*.php');
        $result = [];
        foreach ($controllers as $file) {
            $result[] = str_replace('.php', '', basename($file));
        }

        return $result;
    }

    private static function apiRoute()
    {
        // API Authentication
        Route::group(['middleware' => ['api'], 'namespace' => static::$ums_namespace], function () {
            Route::post("api/get-token", "ApiAuthorizationController@postGetToken");
        });

        Route::group(['middleware' => ['api', UMSAuthAPI::class], 'namespace' => static::$ums_namespace], function () {

            $dir = scandir(base_path("app/Http/Controllers"));
            foreach ($dir as $v) {
                $v = str_replace('.php', '', $v);
                $names = array_filter(preg_split('/(?=[A-Z])/', str_replace('Controller', '', $v)));
                $names = strtolower(implode('_', $names));

                if (substr($names, 0, 4) == 'api_') {
                    $names = str_replace('api_', '', $names);
                    Route::any('api/' . $names, $v . '@execute_api');
                }
            }
        });
    }

    private static function uploadRoute()
    {
        Route::group(['middleware' => ['web'], 'namespace' => static::$ums_namespace], function () {
            Route::get('api-documentation', ['uses' => 'ApiCustomController@apiDocumentation', 'as' => 'apiDocumentation']);
            Route::get('download-documentation-postman', ['uses' => 'ApiCustomController@getDownloadPostman', 'as' => 'downloadDocumentationPostman']);
            Route::get('uploads/{one?}/{two?}/{three?}/{four?}/{five?}', ['uses' => 'FileController@getPreview', 'as' => 'fileControllerPreview']);
        });
    }

    private static function authRoute()
    {
        Route::group(['middleware' => ['web'], 'prefix' => config('ums.ADMIN_PATH'), 'namespace' => static::$ums_namespace], function () {

            Route::post('unlock-screen', ['uses' => 'AdminController@postUnlockScreen', 'as' => 'postUnlockScreen']);
            Route::get('lock-screen', ['uses' => 'AdminController@getLockscreen', 'as' => 'getLockScreen']);
            Route::post('forgot', ['uses' => 'AdminController@postForgot', 'as' => 'postForgot']);
            Route::get('forgot', ['uses' => 'AdminController@getForgot', 'as' => 'getForgot']);
            Route::post('register', ['uses' => 'AdminController@postRegister', 'as' => 'postRegister']);
            Route::get('register', ['uses' => 'AdminController@getRegister', 'as' => 'getRegister']);
            Route::get('logout', ['uses' => 'AdminController@getLogout', 'as' => 'getLogout']);
            Route::post('login', ['uses' => 'AdminController@postLogin', 'as' => 'postLogin']);
            Route::get('login', ['uses' => 'AdminController@getLogin', 'as' => 'getLogin']);
        });
    }

    private static function studentAuthRoute()
    {
        Route::group(['middleware' => ['web'], 'namespace' => static::$ums_namespace], function () {
            // مسارات تسجيل الدخول والخروج للطلاب
            Route::get('StudentgetLogin', 'AdminController@StudentgetLogin')->name('StudentgetLogin'); // رابط الراوت للطلاب /student
            Route::post('StudentpostLogin', 'AdminController@StudentpostLogin')->name('StudentpostLogin'); // تسجيل الدخول
            Route::get('StudentgetLogout', 'AdminController@StudentgetLogout')->name('StudentgetLogout'); // تسجيل الخروج

            // مسارات محمية بواسطة ميدلوير الطلاب
            Route::group(['middleware' => 'student.auth'], function () {
                // الصفحة الرئيسية للطالب
                Route::get('/student', function () {
                    return view('Student.student');
                })->name('student'); // اسم الراوت للصفحة الرئيسية للطالب

                // مسار تحديث كلمة المرور
                Route::post('updatePassword', 'StudentControllerProfile@updatePassword')->name('updatePassword');

                // باقي المسارات الخاصة بالطلاب
                Route::get('student_grades', 'AdminController@StudentGrades')->name('StudentGrades');
                Route::get('student_studyplan', 'AdminController@StudentStudyplan')->name('StudentStudyplan');
                Route::get('student_timetables', 'AdminController@StudentTimetables')->name('StudentTimetables');

                Route::get('updatePassword', function () {
                    if (Session::has('student_id')) {
                        return view('Student.updatePassword');
                    } else {
                        return redirect()->route('StudentgetLogin');
                    }
                })->name('updatePassword');
            });


        });
    }

    private static function userControllerRoute()
    {
        Route::group([
            'middleware' => ['web', '\App\Http\Middleware\UMSBackend'],
            'prefix' => config('ums.ADMIN_PATH'),
            'namespace' => 'App\Http\Controllers',
        ], function () {

            $modules = [];
            try {
                // Todo: change table
                $modules = DB::table('ums_moduls')
                    ->where('path', '!=', '')
                    ->where('controller', '!=', '')
                    ->whereNotNull("path")
                    ->whereNotNull("controller")
                    ->where('is_protected', 0)
                    ->where('deleted_at', null)
                    ->get();
            } catch (\Exception $e) {
                Log::error("Load ums moduls is failed. Caused = " . $e->getMessage());
            }

            foreach ($modules as $v) {
                if (@$v->path && @$v->controller) {
                    try {
                        UMS::routeController($v->path, $v->controller);
                    } catch (\Exception $e) {
                        Log::error("Path = " . $v->path . "\nController = " . $v->controller . "\nError = " . $e->getMessage());
                    }
                }
            }
        });
    }

    private static function umsRoute()
    {
        Route::group([
            'middleware' => ['web', '\App\Http\Middleware\UMSBackend'],
            'prefix' => config('ums.ADMIN_PATH'),
            'namespace' => static::$ums_namespace,
        ], function () {

            // Todo: change table
            if (request()->is(config('ums.ADMIN_PATH'))) {
                $menus = db('ums_menus')->where('is_dashboard', 1)->first();
                if ($menus) {
                    Route::get('/', 'StatisticBuilderController@getDashboard');
                } else {
                    UMS::routeController('/', 'AdminController');
                }
            }

            UMS::routeController('api_generator', 'ApiCustomController');

            // Todo: change table
            $modules = [];
            try {
                $modules = DB::table('ums_moduls')->whereIn('controller', UMSRouter::getUMSControllerFiles())->get();
            } catch (\Exception $e) {
                Log::error("Load ums moduls is failed. Caused = " . $e->getMessage());
            }

            foreach ($modules as $v) {
                if (@$v->path && @$v->controller) {
                    try {
                        UMS::routeController($v->path, $v->controller);
                    } catch (\Exception $e) {
                        Log::error("Path = " . $v->path . "\nController = " . $v->controller . "\nError = " . $e->getMessage());
                    }
                }
            }
        });
    }

    public static function route()
    {

        static::apiRoute();
        static::uploadRoute();
        static::authRoute();
        static::studentAuthRoute();
        self::userControllerRoute();
        static::umsRoute();
    }
}
