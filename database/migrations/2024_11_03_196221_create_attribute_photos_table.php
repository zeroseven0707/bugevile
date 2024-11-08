<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttributePhotosTable extends Migration
{
    public function up()
    {
        Schema::create('attribute_photos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('attribute_id'); // Relasi dengan tabel specifications
            $table->string('name');
            $table->string('foto');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('attribute_photos');
    }
}
