<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->increments('id_post');
            $table->unsignedInteger('id_user');
            $table->string('judul_post', 50);
            $table->text('isi_post'); //, 16382);    //65535);
            $table->string('nama_gambar_post', 50)->nullable();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');

            $table->foreign('id_user')->references('id_user')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post');
    }
}
