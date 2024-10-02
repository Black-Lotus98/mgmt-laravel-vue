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
        Schema::create('truck_fuel_consumption', function (Blueprint $table) {
            $table->id();
            $table->foreignId('truck_id')->constrained('trucks');
            $table->foreignId('trip_id')->constrained('trips');
            $table->dateTime('date_and_time_of_purchase');
            $table->decimal('amount', 10, 2); // in liters or gallons
            $table->decimal('cost_per_liter', 8, 2);
            $table->decimal('total_cost', 10, 2);
            $table->decimal('fuel_used_during_trip', 10, 2)->nullable();
            $table->timestamps();
            $table->boolean('isDeleted')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        // Drop foreign keys before dropping the table
        Schema::table('truck_fuel_consumption', function (Blueprint $table) {
            $table->dropForeign(['truck_id']);
            $table->dropForeign(['trip_id']);
        });

        Schema::dropIfExists('truck_fuel_consumption');
    }
};
