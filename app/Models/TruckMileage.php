<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TruckMileage extends Model
{
    use HasFactory;

    protected $fillable = [
        'truck_id',
        'date_and_time',
        'mileage_reading',
        'isDeleted'
    ];

    public function truck()
    {
        return $this->belongsTo(Truck::class);
    }
}
