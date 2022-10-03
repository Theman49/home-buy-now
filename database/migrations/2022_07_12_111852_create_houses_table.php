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
        Schema::create('houses', function (Blueprint $table) {
            $table->id('id_house');
            $table->string('nama_object');
            $table->integer('id_lokasi');
            $table->integer('jumlah_lantai');
            $table->string('harga');
            $table->integer('luas_tanah');
            $table->integer('luas_bangunan');
            $table->integer('jumlah_kamar_tidur');
            $table->integer('jumlah_kamar_mandi');
            $table->integer('jumlah_carport');
            $table->integer('tahun_bangun');
            $table->integer('id_harga');
            $table->integer('id_luas');
            $table->string('jenis_rumah');
            $table->longtext('deskripsi')->nullable();
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
        Schema::dropIfExists('houses');
    }
};
