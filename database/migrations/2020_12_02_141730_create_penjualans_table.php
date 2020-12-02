<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('tgl_faktur');
            $table->string('no_faktur');
            $table->string('nama_konsumen');
            $table->string('kode_barang');
            $table->string('jumlah');
            $table->string('harga_satuan');
            $table->string('harga_total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjualans');
    }
}
