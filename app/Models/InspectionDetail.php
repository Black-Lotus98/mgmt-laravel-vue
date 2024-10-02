<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InspectionDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'inspection_item',
        'description',
        'notes',
        'max_score',
        'isDeleted'
    ];

    public function grades()
    {
        return $this->hasMany(TailingGrade::class, 'item_id');
    }
}
