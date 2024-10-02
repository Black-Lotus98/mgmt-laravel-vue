<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DocumentType;

class DocumentTypesSeeder extends Seeder
{
    public function run(): void
    {

        $documentTypes = [
            ['type' => 'passport', 'notes' => 'Official passport document'],
            ['type' => 'driver_license', 'notes' => 'Driver\'s license for vehicle operation'],
            ['type' => 'national_id', 'notes' => 'National identification document'],
        ];

        foreach ($documentTypes as $documentType) {
            // Check if the document type already exists before inserting
            DocumentType::firstOrCreate(
                ['type' => $documentType['type']], // Check if a record with this type exists
                ['notes' => $documentType['notes']] // If not, create with this data
            );
        }
    }
}
