<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trailer extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'plate_number',
        'manufacture_year',
        'isDeleted'
    ];

    public function trips()
    {
        return $this->hasMany(Trip::class);
    }
}
