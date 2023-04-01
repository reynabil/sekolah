<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class lowongankerja extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lowongankerjas')->insert([
            'foto' => 'indostar.jpg',
            'nama_perusahaan' => 'PT Indostar Building Material',
            'kualifikasi' => 'Kualifikasi siswa SMK jurusan Kimia Industri',
            'deskripsi' => 'Bagi siswa yang berminat silahkan mengirimkan berkas ke BKK SMKN 1 Pasuruan tanggal 15 Agustus 2020',
        ]);
        DB::table('lowongankerjas')->insert([
            'foto' => 'lowongan.jpg',
            'nama_perusahaan' => 'macromadaniinstitute.com',
            'kualifikasi' => 'Kualifikasi siswa SMK Semua jurusan',
            'deskripsi' => 'Bagi siswa yang berminat silahkan mengirimkan berkas ke BKK SMKN 1 Pasuruan tanggal 2 Agustus 2020',
        ]);
        DB::table('lowongankerjas')->insert([
            'foto' => 'indofood.jpg',
            'nama_perusahaan' => 'PT Indofood Sukses Makmur',
            'kualifikasi' => 'Kualifikasi siswa SMK jurusan Kimia Industri',
            'deskripsi' => 'Bagi siswa yang berminat silahkan mengirimkan berkas ke BKK SMKN 1 Pasuruan tanggal 30 Agustus 2020',
        ]);
    }
}
