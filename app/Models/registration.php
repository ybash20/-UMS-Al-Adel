<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registration extends Model
{
    use HasFactory;
    public function address()
    {
        return $this->belongsTo(Address::class, 'Address_ID');
    }

    public function blood()
    {
        return $this->belongsTo(Blood::class, 'Blood_ID');
    }

    public function identity()
    {
        return $this->belongsTo(Identity::class, 'Identity_ID');
    }

    public function certificate()
    {
        return $this->belongsTo(Certificate::class, 'Certificate_ID');
    }

    public function marital()
    {
        return $this->belongsTo(Marital::class, 'Marital_ID');
    }

    public function qualification()
    {
        return $this->belongsTo(Qualification::class, 'Qualification_ID');
    }
}
