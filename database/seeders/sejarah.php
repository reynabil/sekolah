<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class sejarah extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sejarahs')->insert([
            'sejarah' => '<p>
            SMK Negeri 1 Pasuruan
            bermula dari Sekolah Menengah Ekonomi Pertama (SMEP) yang berdomisili di Jalan Veteran 11
            Pasuruan, Telp. 0343-421380, dibangun diatas tanah seluas 8950 meter persegi berdasarkan
            sertifikat No. 886/ 1985.
        </p>
        <p>
            Pada tahun 1977 dengan SK No 0278/U/1976 dari SMEP diintegrasikan
            menjadi SMP yang disempurnakan. Pada Tahun pelajaran baru 1978 ditingkatkan menjadi SLTA
            Kejuruan (SMEA Negeri) Pasuruan dengan lampiran Keputusan Menteri Pendidikan dan Kebudayaan
            tanggal 30 Juli 1980 No. 0209/0/1980. Pada Tahun 2000 SMEA Negeri Pasuruan diubah nama menjadi
            SMK Negeri 1 Pasuruan Kelompok Bisnis dan Manajemen dan Kelompok Teknologi.
        </p>',
        'fotos' => 'voli.jpeg',
        ]);
    }
}
