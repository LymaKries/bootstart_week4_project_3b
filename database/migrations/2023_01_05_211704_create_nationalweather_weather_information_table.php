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
        Schema::create('nationalweather_weather_information', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->float('degree_of_the_morning');
            $table->float('degree_of_the_afternoon');
            $table->float('degree_of_the_night');
            $table->unsignedBigInteger('type_of_weather_id');
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
        Schema::dropIfExists('nationalweather_weather_information');
    }
};
