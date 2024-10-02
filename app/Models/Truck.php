<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    use HasFactory;

    protected $fillable = [
        'plate_number',
        'model',
        'registration_number',
        'chassis_number',
        'manufacturer_year',
        'color',
        'isDeleted'
    ];

    public function mileage()
    {
        return $this->hasMany(TruckMileage::class);
    }

    public function insurance()
    {
        return $this->hasMany(TruckInsurance::class);
    }

    public function licenses()
    {
        return $this->hasMany(TruckLicense::class);
    }

    public function fuelConsumption()
    {
        return $this->hasMany(TruckFuelConsumption::class);
    }

    public function accidents()
    {
        return $this->hasMany(TruckAccident::class);
    }

    public function trips()
    {
        return $this->hasMany(Trip::class);
    }
}
