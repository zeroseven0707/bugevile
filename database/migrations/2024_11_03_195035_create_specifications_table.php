<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecificationsTable extends Migration
{
    public function up()
    {
        Schema::create('specifications', function (Blueprint $table) {
            $table->id();
            // Tambahkan kolom lain sesuai kebutuhan spesifikasi
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('specifications');
    }
}
