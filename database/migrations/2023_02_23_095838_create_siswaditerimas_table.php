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
        Schema::create('siswaditerimas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_judul')->unsigned();
            $table->foreign('id_judul')->references('id')->on('pengumumen')->onDelete('cascade');
            $table->string('foto_siswa');
            $table->integer('nisn');
            $table->string('nama_siswa');
            $table->string('email');
            $table->bigInteger('no_telp');
            $table->enum('jeniskelamin',['laki-laki','perempuan']);
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
        Schema::dropIfExists('siswaditerimas');
    }
};
