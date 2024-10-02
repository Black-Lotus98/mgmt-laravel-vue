<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $fillable = [
        'national_id',
        'first_name',
        'middle_name',
        'last_name',
        'arabic_name',
        'dob',
        'driver_code',
        'phone_number',
        'status',
        'truck_id',
        'transfer_exp',
        'driver_photo_url',
        'isDeleted'
    ];

    public function documents()
    {
        return $this->hasMany(DriverDocument::class);
    }

    public function employmentHistory()
    {
        return $this->hasMany(EmploymentHistory::class);
    }

    public function tailingRecords()
    {
        return $this->hasMany(TailingRecord::class);
    }

    public function trips()
    {
        return $this->hasMany(Trip::class);
    }
}
