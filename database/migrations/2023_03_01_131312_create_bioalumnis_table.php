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
        Schema::create('bioalumnis', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('alumni');
            $table->text('alamat');
            $table->string('email');
            $table->string('no_telp');
            $table->integer('tahun_lulus');
            $table->string('jurusan');
            $table->string('pekerjaan');
            $table->string('pendidikan');
            $table->string('pengalaman');
            $table->string('penghargaan');
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
        Schema::dropIfExists('bioalumnis');
    }
};
