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
        Schema::create('airbnb_users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('pseudo');
            $table->string('password');
            $table->string('email');
            $table->string('phone');
            $table->unsignedBigInteger('adress_id');
            $table->unsignedInteger('postal_code');
            $table->string('city');
            $table->string('country');
            $table->date('birth');
            $table->unsignedBigInteger('payment_id');
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
        Schema::dropIfExists('airbnb_users');
    }
};
