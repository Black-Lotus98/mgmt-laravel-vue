<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverDocument extends Model
{
    use HasFactory;

    protected $fillable = [
        'driver_id',
        'document_type_id',
        'document_number',
        'doc_exp_date',
        'image_url',
        'isDeleted'
    ];

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

    public function documentType()
    {
        return $this->belongsTo(DocumentType::class);
    }
}
