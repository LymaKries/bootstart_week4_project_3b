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
        Schema::create('airbnb_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_owner_id');
            $table->string('title');
            $table->string('address');
            $table->unsignedInteger('postal_code');
            $table->string('city');
            $table->string('country');
            $table->text('description');
            $table->float('price');
            $table->unsignedBigInteger('number_of_persons');
            $table->unsignedBigInteger('number_of_bedrooms');
            $table->unsignedBigInteger('number_of_beds');
            $table->unsignedBigInteger('number_of_bathrooms');
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
        Schema::dropIfExists('airbnb_products');
    }
};
