<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaintenanceEventType extends Model
{
    use HasFactory;

    protected $fillable = [
        'maintenance_category_id',
        'name',
        'isDeleted'
    ];

    public function category()
    {
        return $this->belongsTo(MaintenanceCategory::class);
    }
}
