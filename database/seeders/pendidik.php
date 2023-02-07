<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pendidik extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pendidiks')->insert([
            'foto' => 'kepsek.jpg',
            'nama' => 'Drs. Akh Sigit Suyani, S.ST, M.T',
            'pangkat_gol' => 'Pembina Tk. I / IV/b',
            'tugas' => 'Kepala Sekolah',
        ]);
        DB::table('pendidiks')->insert([
            'foto' => 'kepsek.jpg',
            'nama' => 'Hj. Inul Qomariyah, SPd.',
            'pangkat_gol' => 'Pembina Tk. I / IV/b',
            'tugas' => 'Produktif Pemasaran',
        ]);
        DB::table('pendidiks')->insert([
            'foto' => 'kepsek.jpg',
            'nama' => 'Agustini Riyatmiyati, S.Pd, M.Pd.',
            'pangkat_gol' => 'Pembina Tk. I / IV/b',
            'tugas' => 'Produktif Pemasaran',
        ]);
        DB::table('pendidiks')->insert([
            'foto' => 'kepsek.jpg',
            'nama' => 'Sri Handayani, S.Pd',
            'pangkat_gol' => 'Pembina Tk. I / IV/b',
            'tugas' => 'Produktif Akuntansi',
        ]);
    }
}
