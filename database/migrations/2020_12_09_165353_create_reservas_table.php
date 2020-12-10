<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('userID');
            $table->foreign('userID')->references('id')->on('users');
            $table->integer('carID')->unsigned();
            $table->foreign('carID')->references('id')->on('cars')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamp('pickupDate')->nullable();
            $table->timestamp('returnDate')->nullable();
            $table->text('extras')->nullable();
            $table->integer('price');
            $table->boolean('isPending')->nullable();
            $table->boolean('isPaid')->nullable();
            $table->boolean('isCompleted')->nullable();
            $table->nullableTimestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas');
    }
}
