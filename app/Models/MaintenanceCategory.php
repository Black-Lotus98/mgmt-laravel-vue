<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaintenanceCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'isDeleted'
    ];

    public function eventTypes()
    {
        return $this->hasMany(MaintenanceEventType::class);
    }
}
