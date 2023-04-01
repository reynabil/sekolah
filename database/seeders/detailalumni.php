<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class detailalumni extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bioalumnis')->insert([
            'alumni' => '1',
            'alamat' => 'Pasuruan',
            'email' => 'rahmat@gmail.com',
            'no_telp' => '081981238765',
            'tahun_lulus' => '2019',
            'jurusan' => 'Rekayasa Perangkat Lunak',
            'pekerjaan' => 'Dosen Pengajar',
            'pendidikan' => 'Sarjana Komputer, Univeristas Brawijaya, IND',
            'pengalaman' => '3 Tahun Dalam Menjadi Dosen',
            'penghargaan' => 'Penghargaan Dosen Terbaik',
        ]);
        DB::table('bioalumnis')->insert([
            'alumni' => '2',
            'alamat' => 'Pasuruan',
            'email' => 'rahmat@gmail.com',
            'no_telp' => '081981238765',
            'tahun_lulus' => '2019',
            'jurusan' => 'Rekayasa Perangkat Lunak',
            'pekerjaan' => 'Dosen Pengajar',
            'pendidikan' => 'Sarjana Komputer, Univeristas Brawijaya, IND',
            'pengalaman' => '3 Tahun Dalam Menjadi Dosen',
            'penghargaan' => 'Penghargaan Dosen Terbaik',
        ]);
    }
}
