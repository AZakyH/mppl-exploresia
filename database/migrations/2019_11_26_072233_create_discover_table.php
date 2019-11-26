<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscoverTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discover', function (Blueprint $table) {
            $table->increments('id_discover');
            $table->string('judul_discover', 50);
            $table->text('isi_discover');
            $table->string('nama_gambar_discover', 50);
            $table->timestamp('discover_time')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('discover');
    }
}
