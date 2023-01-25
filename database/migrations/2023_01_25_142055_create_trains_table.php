<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps(); 
            $table->bigInteger('company')->unsigned();
            $table->string('departure_station');
            $table->string('arrival_station');
            $table->dateTime("departure_time");
            $table->dateTime("arrival_time");
            $table->bigInteger('traincode');
            $table->integer('number_carriages');
            $table->boolean('in_time')->defautl(true);
            $table->boolean('deleted')->default(false);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
