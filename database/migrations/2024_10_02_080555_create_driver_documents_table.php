<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('driver_documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('driver_id')->constrained('drivers');
            $table->foreignId('document_type_id')->constrained('document_types');
            $table->string('document_number');
            $table->date('doc_exp_date');
            $table->string('image_url')->nullable();
            $table->timestamps();
            $table->boolean('isDeleted')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('driver_documents');
    }
};
