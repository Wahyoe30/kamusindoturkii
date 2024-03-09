<?php

namespace Database\Seeders;

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
        Schema::create('indo_turkis', function (Blueprint $table) {
            $table->id();
            $table->string('kata_indonesia');
            $table->string('kata_turki');
            $table->string('jenis_kata')->nullable();
            $table->text('contoh_penggunaan')->nullable();
            $table->text('contoh_penggunaan_turki')->nullable();
            $table->text('keterangan')->nullable();
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
        Schema::dropIfExists('indo_turkis');
    }
};
