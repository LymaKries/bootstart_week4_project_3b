<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new  class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('google_drive_files', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('weight')->nullable();
            $table->enum('type_of_file', ['pdf', 'sheet', 'doc', 'mp3', 'mp4']);
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
        Schema::dropIfExists('google_drive_files');
    }
};
