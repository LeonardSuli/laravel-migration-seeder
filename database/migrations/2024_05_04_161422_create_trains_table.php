<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 
     * - company
     * - departure_station
     * - arrival_station
     * - departure_time
     * - arrival_time
     * - train_code
     * - carriages_number
     * - in_time
     * - deleted
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 50)->nullable();
            $table->string('departure_station', 50);
            $table->string('arrival_station', 50);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->string('train_code', 20)->nullable();
            $table->unsignedTinyInteger('carriages_number')->nullable();
            $table->boolean('in_time');
            $table->boolean('deleted');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
