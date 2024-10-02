<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmploymentHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'driver_id',
        'start_date',
        'end_date',
        'isDeleted'
    ];

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }
}
