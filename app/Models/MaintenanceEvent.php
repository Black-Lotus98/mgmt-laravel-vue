<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaintenanceEvent extends Model
{
    use HasFactory;

    protected $fillable = [
        'maintainable_id',
        'maintenance_event_type_id',
        'description',
        'date_and_time',
        'total_cost',
        'isDeleted'
    ];

    public function eventType()
    {
        return $this->belongsTo(MaintenanceEventType::class);
    }

    public function maintainable()
    {
        return $this->belongsTo(Truck::class, 'maintainable_id');
    }
}
