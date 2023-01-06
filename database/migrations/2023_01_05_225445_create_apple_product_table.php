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
        Schema::create('apple_product', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->float('height');
            $table->float('width');
            $table->float('weight');
            $table->unsignedBigInteger('comment_id');
            $table->enum('category', ['Iphone', 'Ipad', 'Mac', 'Airpod']);
            $table->float('price');
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
        Schema::dropIfExists('apple_product');
    }
};
