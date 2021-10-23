<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->integer('booking_id')->nullable();
            $table->integer('customer_id')->nullable();
            $table->string('customer_name')->nullable();
            $table->string('status')->nullable();
            $table->string('location')->nullable();
            $table->string('destination')->nullable();
            $table->integer('vehicle_id')->nullable();
            $table->integer('vehicle_seat')->nullable();
            $table->integer('price')->nullable();
            $table->integer('lga_id')->nullable();
            $table->integer('state_id')->nullable();
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
        Schema::dropIfExists('tickets');
    }
}
