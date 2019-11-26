<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCulinaryRecTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('culinary_rec', function (Blueprint $table) {
            $table->increments('id_restrec');
            $table->string('nama_restaurant', 50);
            $table->string('kategori_harga_rest', 20);
            $table->string('deskripsi_rest', 255);
            $table->string('detail_rest', 255);
            $table->string('gambar_rest', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('culinary_rec');
    }
}
