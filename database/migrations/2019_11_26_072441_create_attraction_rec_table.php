<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttractionRecTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attraction_rec', function (Blueprint $table) {
            $table->increments('id_attractrec');
            $table->string('nama_attract', 50);
            $table->string('deskripsi_attract', 255);
            $table->string('detail_attract', 255);
            $table->string('gambar_attractrec', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attraction_rec');
    }
}
