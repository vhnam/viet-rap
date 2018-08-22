<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumsAndSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums_and_songs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('song')->unsigned()->index();
            $table->integer('album')->unsigned()->index();
            $table->timestamps();

            $table->foreign('song')->references('id')->on('songs')->onDelete('cascade');
            $table->foreign('album')->references('id')->on('albums')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('albums_and_songs');
    }
}
