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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('national_id')->unique();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('arabic_name')->nullable();
            $table->date('dob');
            $table->string('driver_code')->unique();
            $table->string('phone_number');
            $table->string('status');
            $table->foreignId('truck_id')->nullable()->constrained('trucks');
            $table->text('transfer_exp')->nullable();
            $table->string('driver_photo_url')->nullable();
            $table->timestamps();
            $table->boolean('isDeleted')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drivers');
    }
};
