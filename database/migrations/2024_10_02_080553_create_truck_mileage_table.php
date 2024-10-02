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
        Schema::create('truck_mileage', function (Blueprint $table) {
            $table->id();
            $table->foreignId('truck_id')->constrained('trucks');
            $table->dateTime('date_and_time');
            $table->decimal('mileage_reading', 10, 2); // in kilometers
            $table->timestamps();
            $table->boolean('isDeleted')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('truck_mileage');
    }
};
