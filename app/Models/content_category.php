<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\content;

class content_category extends Model
{
    use HasFactory;
    protected $table = 'content_categories';

    public function contents()
    {
        return $this->hasMany(content::class, 'Category_ID');
    }
}
