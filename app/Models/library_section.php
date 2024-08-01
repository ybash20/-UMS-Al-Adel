<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class library_section extends Model
{
    use HasFactory;

    protected $fillable = [
        'Name','id'
    ];

    public function books()
    {
        return $this->hasMany(book::class, 'Section_ID');
    }
}
