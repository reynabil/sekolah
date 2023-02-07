<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class perkembangan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perkembangans')->insert([
            'tahun' => '1987',
            'judul' => 'Tahun 1978-1987',
            'foto' => 'koperasi.jpeg',
            'deskripsi' => 'ada 3 jurusan yaitu Tata Buku, Tata Usaha, Tata Niaga.',
        ]);
        DB::table('perkembangans')->insert([
            'tahun' => '2000',
            'judul' => 'Tahun 1987-2000',
            'foto' => 'koperasi.jpeg',
            'deskripsi' => 'ada perubahan nama jurusan menjadi Program Keahlian yaitu Akuntansi, Sekretaris, Manajemen Bisnis.
            ',
        ]);
        DB::table('perkembangans')->insert([
            'tahun' => '2002',
            'judul' => 'Tahun 2001-2002',
            'foto' => 'koperasi.jpeg',
            'deskripsi' => 'membuka Bidang Keahlian Kimia, Program Keahlian Kimia Industri.membuka Program Keahlian Teknologi Informasi.
            ',
        ]);
        DB::table('perkembangans')->insert([
            'tahun' => '2004',
            'judul' => 'Tahun 2003-2004',
            'foto' => 'koperasi.jpeg',
            'deskripsi' => 'menambah Program Keahlian Analisis Kimia.Program Keahlian Teknik Komputer dan Jaringan, Multimedia.',
        ]);
        DB::table('perkembangans')->insert([
            'tahun' => '2005',
            'judul' => 'Tahun 2004-2005',
            'foto' => 'koperasi.jpeg',
            'deskripsi' => 'SMK Negeri 1 Pasuruan  SMK Besar.menambah Program Keahlian Rekayasa Perangkat Lunak.mendirikan ICT Center  ',
        ]);
    }
}
