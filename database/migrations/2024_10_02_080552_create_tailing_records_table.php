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
        Schema::create('tailing_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('driver_id')->constrained('drivers');
            $table->date('inspection_date');
            $table->time('start_time');
            $table->time('end_time');
            $table->string('start_place');
            $table->string('finish_place');
            $table->integer('distance');
            $table->text('notes')->nullable();
            $table->timestamps();
            $table->boolean('isDeleted')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tailing_records');
    }
};
