<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TruckAccident extends Model
{
    use HasFactory;

    protected $fillable = [
        'truck_id',
        'date_and_time',
        'location',
        'description',
        'damage_details',
        'isDeleted'
    ];

    public function truck()
    {
        return $this->belongsTo(Truck::class);
    }
}
