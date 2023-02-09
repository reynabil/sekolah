<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class border extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('borders')->insert([
            'judul1' => 'Prestasi Sekolah',
            'deskripsi1' => '<p>Juara I Lomba LKS tingkat jawa timur pada Program Keahlian Multimedia</p>
            <p>Juara I Albanjari tingkat Kota Pasuruan</p>
            <p>Juara 3 Teknik Perancangan Model 3D</p>',
            'judul2' => 'Tentang Pendidikan',
            'deskripsi2' => '<p>Pembelajaran menggunakan kurikulum merdeka dan terdapat 8 kompetensi keahlian di SMKN 1 Pasuruan</p>',
            'judul3' => 'Berdiri Sejak Tahun 2000',
            'deskripsi3' => '<p>Pada Tahun 2000 SMEA Negeri Pasuruan diubah nama menjadi SMK Negeri 1 Pasuruan </p>',
        ]);


    }
}
