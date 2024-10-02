<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'city',
        'location_link',
        'isDeleted'
    ];

    public function tripsStart()
    {
        return $this->hasMany(Trip::class, 'start_station_id');
    }

    public function tripsOffload()
    {
        return $this->hasMany(Trip::class, 'offload_station_id');
    }
}
