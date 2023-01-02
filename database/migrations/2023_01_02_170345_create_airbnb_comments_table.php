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
        Schema::create('airbnb_comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_comment_id');
            $table->unsignedInteger('notation');
            $table->text('content');
            $table->unsignedInteger('user_receiver_id');
//           or product_id
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
        Schema::dropIfExists('airbnb_comments');
    }
};
