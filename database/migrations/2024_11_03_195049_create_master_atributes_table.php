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
        Schema::create('master_atributes', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('id_spesifikasi')->constrained('specifications')->onDelete('cascade');// Foreign key ke tabel specifications
            $table->string('nama');
            $table->decimal('harga', 10, 2);
            $table->longText('photo')->nullable();
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
        Schema::dropIfExists('master_atributes');
    }
};
