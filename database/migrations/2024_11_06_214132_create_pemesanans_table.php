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
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pelanggan');
            $table->string('no_telpon');
            $table->string('alamat');
            $table->date('tanggal_masuk');
            $table->date('tanggal_selesai');
            $table->string('total_waktu_pengerjaan')->nullable();
            $table->string('jenis_produk');
            $table->string('jenis_pola');
            $table->string('jenis_print');
            $table->integer('jumlah_produk');
            $table->decimal('harga_satuan', 10, 2);
            $table->decimal('total_harga', 10, 2);
            $table->decimal('pembayaran_awal', 10, 2);
            $table->decimal('sisa_pembayaran', 10, 2);
            $table->integer('qty_xxs')->nullable();
            $table->integer('qty_xs')->nullable();
            $table->integer('qty_s')->nullable();
            $table->integer('qty_m')->nullable();
            $table->integer('qty_l')->nullable();
            $table->integer('qty_xl')->nullable();
            $table->integer('qty_2xl')->nullable();
            $table->integer('qty_3xl')->nullable();
            $table->integer('qty_4xl')->nullable();
            $table->integer('qty_5xl')->nullable();
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
        Schema::dropIfExists('pemesanans');
    }
};
