<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class galeri extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galeris')->insert([
            'judul' => 'Kegiatan PPDB',
            'foto' => 'kelas.jpg'
        ]);
        DB::table('galeris')->insert([
            'judul' => 'Buka Bersama Guru dan Karyawan SMKN 1',
            'foto' => 'bukber.jpg'
        ]);
        DB::table('galeris')->insert([
            'judul' => 'Upacara Sumpah Pemuda',
            'foto' => 'upacara.jpg'
        ]);
        DB::table('galeris')->insert([
            'judul' => 'Gerak Jalan',
            'foto' => 'gerak.jpg'
        ]);
        DB::table('galeris')->insert([
            'judul' => 'Upacara Kesaktian Pancasila',
            'foto' => 'pancasila.jpg'
        ]);
        DB::table('galeris')->insert([
            'judul' => 'Hari Pendidikan',
            'foto' => 'pendidikan.jpg'
        ]);
    }
}
