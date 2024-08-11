<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class book extends Model
{
    use HasFactory;

    protected $table = 'books';

    public static function search($query)
    {
        return empty($query) ? static::query()
            : static::where('Title', 'like', '%'.$query.'%');
    }

    public function section()
    {
        return $this->belongsTo(library_section::class, 'Section_ID');
    }
}
