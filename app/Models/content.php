<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\content_category;
use App\Models\content_image;

class content extends Model
{
    use HasFactory;
    protected $table = 'contents';

    public function category()
    {
        return $this->belongsTo(content_category::class, 'Category_ID');
    }

    // العلاقة مع صور المحتوى
    public function images()
    {
        return $this->hasMany(content_image::class, 'Content_ID');
    }

}
