<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id('id_barang');
            $table->string('kode_barang')->unique();
            $table->string('kode_kategori');
            $table->foreign('kode_kategori')->references('kode_kategori')->on('kategori')->onUpdate('cascade')->restrictOnDelete();
            $table->string('nama_barang');
            $table->decimal('harga_barang');
            $table->string('gambar_barang');
            $table->text('deskripsi_barang');
            $table->date('kadaluarsa_barang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang');
    }
}
