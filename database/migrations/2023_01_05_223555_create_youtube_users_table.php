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
        Schema::create('youtube_users', function (Blueprint $table) {
            $table->id();
            $table->string('pseudo');
            $table->string('password');
            $table->string('email');
            $table->string('country');
            $table->date('birth');
            $table->unsignedBigInteger('user_following_id');
            $table->unsignedBigInteger('video_liked_id');
            $table->unsignedBigInteger('chain_id');
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
        Schema::dropIfExists('youtube_users');
    }
};
