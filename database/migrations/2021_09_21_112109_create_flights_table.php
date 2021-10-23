<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('vehicle_id')->nullable();
            $table->integer('route_id')->nullable();
            $table->integer('take_off_time')->nullable();
            $table->integer('booked_seats')->nullable();
            $table->integer('is_cancelled')->nullable();
            $table->integer('is_postponed')->nullable();
            $table->integer('is_unavailable')->nullable();
            $table->integer('station_id')->nullable();
            $table->integer('price')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flights');
    }
}
