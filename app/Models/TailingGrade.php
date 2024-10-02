<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TailingGrade extends Model
{
    use HasFactory;

    protected $fillable = [
        'record_id',
        'item_id',
        'type',
        'score',
        'isDeleted'
    ];

    public function tailingRecord()
    {
        return $this->belongsTo(TailingRecord::class, 'record_id');
    }

    public function inspectionItem()
    {
        return $this->belongsTo(InspectionDetail::class, 'item_id');
    }
}
