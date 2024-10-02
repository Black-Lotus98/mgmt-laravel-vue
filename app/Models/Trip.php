<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = [
        'truck_id',
        'trailer_id',
        'driver_id',
        'tender_id',
        'start_station_id',
        'offload_station_id',
        'product_id',
        'start_date_time',
        'finish_date_time',
        'transport_quantity',
        'notes',
        'isDeleted'
    ];

    public function truck()
    {
        return $this->belongsTo(Truck::class);
    }

    public function trailer()
    {
        return $this->belongsTo(Trailer::class);
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

    public function tender()
    {
        return $this->belongsTo(Tender::class);
    }

    public function startStation()
    {
        return $this->belongsTo(Station::class, 'start_station_id');
    }

    public function offloadStation()
    {
        return $this->belongsTo(Station::class, 'offload_station_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
