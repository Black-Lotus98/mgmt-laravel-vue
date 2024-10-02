<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TruckLicense extends Model
{
    use HasFactory;

    protected $fillable = [
        'truck_id',
        'license_number',
        'issue_date',
        'expiry_date',
        'photo',
        'isDeleted'
    ];

    public function truck()
    {
        return $this->belongsTo(Truck::class);
    }
}
