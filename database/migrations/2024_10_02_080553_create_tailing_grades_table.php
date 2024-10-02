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
        Schema::create('tailing_grades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('record_id')->constrained('tailing_records');
            $table->foreignId('item_id')->constrained('inspection_details');
            $table->string('type');
            $table->integer('score');
            $table->timestamps();
            $table->boolean('isDeleted')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tailing_grades');
    }
};
