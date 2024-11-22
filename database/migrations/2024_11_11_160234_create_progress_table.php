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
        Schema::create('progress', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pemesanan_id');
            $table->longText('image_pola_jersey')->nullable();
            $table->longText('image_revisi')->nullable();
            $table->longText('image_layout_print')->nullable();
            $table->longText('image_press')->nullable();
            $table->longText('image_jahit')->nullable();

            $table->enum('status_pola_jersey',['selesai','belum'])->default('belum');
            $table->enum('status_revisi',['selesai','belum'])->default('belum');
            $table->enum('status_layout_print',['selesai','belum'])->default('belum');
            $table->enum('status_press',['selesai','belum'])->default('belum');
            $table->enum('status_jahit',['selesai','belum'])->default('belum');
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
        Schema::dropIfExists('progress');
    }
};
