<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TruckInsurance extends Model
{
    use HasFactory;

    protected $fillable = [
        'truck_id',
        'insurance_company',
        'issue_date',
        'expiry_date',
        'coverage_details',
        'photo',
        'isDeleted'
    ];

    public function truck()
    {
        return $this->belongsTo(Truck::class);
    }
}
