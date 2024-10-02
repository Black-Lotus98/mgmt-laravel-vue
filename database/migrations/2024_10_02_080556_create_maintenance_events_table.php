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
        Schema::create('maintenance_events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('maintainable_id')->constrained('trucks'); // Assuming trucks for now; can be polymorphic
            $table->foreignId('maintenance_event_type_id')->constrained('maintenance_event_types');
            $table->text('description')->nullable();
            $table->dateTime('date_and_time');
            $table->decimal('total_cost', 10, 2)->nullable();
            $table->timestamps();
            $table->boolean('isDeleted')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintenance_events');
    }
};
