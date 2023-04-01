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
        Schema::create('alumnis', function (Blueprint $table) {
            $table->id();
            $table->string('foto')->nullable();
            $table->string('nama_alumni');
            $table->string('alamat');
            $table->string('email');
            $table->string('no_telp');
            $table->string('jurusan');
            $table->string('pendidikan');
            $table->string('penghargaan');
            $table->string('pekerjaan');
            $table->string('pengalaman');
            $table->string('tahunlulus');
            $table->longText('testimoni');
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('alumnis');
    }
};
