<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('location_name')->nullable();
            $table->string('destination_name')->nullable();
            $table->integer('location_lga_id')->nullable();
            $table->integer('destination_lga_id')->nullable();
            $table->integer('location_state_id')->nullable();
            $table->integer('destination_state_id')->nullable();
            $table->double('distance');
            $table->integer('fuel_needed')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('routes');
    }
}
