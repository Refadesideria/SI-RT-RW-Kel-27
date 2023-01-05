<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRondasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rondas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_rt');
            $table->enum(
                'bulan',
                ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember']
            );
            $table->enum('minggu',['Pertama','Kedua','Ketiga','Empat']);
            $table->foreign('id_rt')->references('id')->on('rts')->onDelete('cascade');
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
        Schema::dropIfExists('rondas');
    }
}
