<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'hazardous_material',
        'unit_of_measure',
        'description',
        'flammability',
        'density',
        'isDeleted'
    ];

    public function trips()
    {
        return $this->hasMany(Trip::class);
    }
}
