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
        Schema::create('truck_insurances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('truck_id')->constrained('trucks');
            $table->string('insurance_company');
            $table->date('issue_date');
            $table->date('expiry_date');
            $table->text('coverage_details')->nullable();
            $table->string('photo')->nullable();
            $table->timestamps();
            $table->boolean('isDeleted')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('truck_insurances');
    }
};
