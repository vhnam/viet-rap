<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtistsAndSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists_and_songs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('song')->unsigned()->index();
            $table->integer('artist')->unsigned()->index();
            $table->timestamps();

            $table->foreign('song')->references('id')->on('songs')->onDelete('cascade');
            $table->foreign('artist')->references('id')->on('artists')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artists_and_songs');
    }
}
