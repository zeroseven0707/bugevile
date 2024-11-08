<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('kode_produk');
            $table->string('nama_produk');
            $table->string('jenis_pola');
            $table->integer('total_harga_spesifikasi');
            $table->string('jenis_print');
            $table->integer('total_harga_print');
            $table->integer('harga_jual');
            $table->integer('harga_produksi');
            $table->integer('laba');
            $table->longText('foto')->nullable();
            $table->unsignedBigInteger('id_spesifikasi')->nullable();
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
        Schema::dropIfExists('products');
    }
};
