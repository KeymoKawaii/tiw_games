<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->Text("desc");
            $table->Integer("like");
            $table->unsignedBigInteger('reply_to');
            $table->foreign('reply_to')->references('id')->on('comments');
            $table->Text("author");
            $table->unsignedBigInteger('user')->default(NULL);
            $table->foreign('user')->references('id')->on('users');
            $table->unsignedBigInteger('game')->default(NULL);
            $table->foreign('game')->references('id')->on('games');
            $table->timestamp("create_at");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
