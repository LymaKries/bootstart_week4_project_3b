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
        Schema::create('nationalweather_type_weather', function (Blueprint $table) {
            $table->id();
            $table->enum('type_of_weather', ['rain', 'storm', 'sun', 'fog', 'snow']);
            $table->time('hour');
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
        Schema::dropIfExists('nationalweather_type_weather');
    }
};
