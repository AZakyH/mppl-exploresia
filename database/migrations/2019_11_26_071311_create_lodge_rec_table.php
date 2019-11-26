<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLodgeRecTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lodge_rec', function (Blueprint $table) {
            $table->increments('id_lodge');
            $table->string('nama_lodge', 50);
            $table->string('kategori_harga_lodge', 20);
            $table->string('deskripsi_lodge', 255);
            $table->string('detail_lodge', 255);
            $table->string('gambar_lodge', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lodge_rec');
    }
}
