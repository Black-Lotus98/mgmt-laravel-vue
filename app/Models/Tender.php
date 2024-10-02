<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tender extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'owner',
        'start_date',
        'finish_date',
        'description',
        'isDeleted'
    ];

    public function trips()
    {
        return $this->hasMany(Trip::class);
    }
}
