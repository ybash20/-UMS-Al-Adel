<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\content;

class content_image extends Model
{
    use HasFactory;
    protected $table = 'content_images';

    public function content()
    {
        return $this->belongsTo(content::class, 'Content_ID');
    }
}
