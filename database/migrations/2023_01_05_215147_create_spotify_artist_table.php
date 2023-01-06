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
        Schema::create('spotify_artist', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('song_id');
            $table->unsignedInteger('album_id');
            $table->boolean('user_following_or_not')->default(false);
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
        Schema::dropIfExists('spotify_artist');
    }
};
