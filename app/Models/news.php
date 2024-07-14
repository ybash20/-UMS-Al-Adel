<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    use HasFactory;

    protected $table = 'news';
    
    protected $fillable = ['Title', 'Publication_date', 'Category_ID',''];

    public function images()
    {
        return $this->hasMany(news_image::class, 'News_ID');
    }

    // علاقة الأخبار مع الفئة
    public function category()
    {
        return $this->belongsTo(news_category::class, 'Category_ID');
    }
}
