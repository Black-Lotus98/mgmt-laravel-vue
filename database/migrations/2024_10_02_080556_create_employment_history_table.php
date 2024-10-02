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
        Schema::create('employment_history', function (Blueprint $table) {
            $table->id();
            $table->foreignId('driver_id')->constrained('drivers');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->timestamps();
            $table->boolean('isDeleted')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop the foreign key before dropping the table
        Schema::table('employment_history', function (Blueprint $table) {
            $table->dropForeign(['driver_id']);
        });
        Schema::dropIfExists('employment_history');
    }
};
