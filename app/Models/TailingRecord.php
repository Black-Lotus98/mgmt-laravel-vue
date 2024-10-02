<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TailingRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'driver_id',
        'inspection_date',
        'start_time',
        'end_time',
        'start_place',
        'finish_place',
        'distance',
        'notes',
        'isDeleted'
    ];

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

    public function grades()
    {
        return $this->hasMany(TailingGrade::class, 'record_id');
    }
}
