<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news_category extends Model
{
    use HasFactory;
    protected $table = 'news_categories';

    public function news()
    {
        return $this->hasMany(news::class, 'Category_ID');
    }
}
