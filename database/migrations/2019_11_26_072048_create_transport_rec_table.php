<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransportRecTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transport_rec', function (Blueprint $table) {
            $table->increments('id_transportasi');
            $table->string('nama_transportasi', 50);
            $table->string('jenis_transportasi', 50);
            $table->float('harga_transportasi');
            $table->timestamp('waktu_keberangkatan')->nullable();
            $table->timestamp('waktu_tiba')->nullable();
            $table->string('asal', 50);
            $table->string('tujuan', 50);
            $table->string('gambar_transrec', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transport_rec');
    }
}
