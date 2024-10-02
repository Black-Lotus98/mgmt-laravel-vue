<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TruckFuelConsumption extends Model
{
    use HasFactory;

    protected $fillable = [
        'truck_id',
        'trip_id',
        'date_and_time_of_purchase',
        'amount',
        'cost_per_liter',
        'total_cost',
        'fuel_used_during_trip',
        'isDeleted'
    ];

    public function truck()
    {
        return $this->belongsTo(Truck::class);
    }

    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }
}
