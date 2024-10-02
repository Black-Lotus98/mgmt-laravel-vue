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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->foreignId('truck_id')->constrained('trucks');
            $table->foreignId('trailer_id')->constrained('trailers');
            $table->foreignId('driver_id')->constrained('drivers');
            $table->foreignId('tender_id')->nullable()->constrained('tenders');
            $table->foreignId('start_station_id')->constrained('stations');
            $table->foreignId('offload_station_id')->constrained('stations');
            $table->foreignId('product_id')->nullable()->constrained('products');
            $table->dateTime('start_date_time');
            $table->dateTime('finish_date_time');
            $table->decimal('transport_quantity', 10, 2);
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
        Schema::dropIfExists('trips');
    }
};
