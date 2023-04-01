<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class kelasxis extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelasxis')->insert([
            'foto' => 'pkn2.jpg',
            'bahanajar' => 'PPKN',
            'kelas' => 'XI',
            'deskripsi' => '<P>Buku ini disusun berdasarkan kurikulum 2013. Pembahasan materi</p>
            <p>pembelajaran. PPKn mencakup Pancasila, Undang-Undang Dasar Negara</p>
            <p>Republik Indonesia. Tahun 1945</p>  ',
            'link' => 'https://drive.google.com/file/d/13p4HtbTBmEawhTiIvKSy8a6-zMt1htYY/view',
        ]);
        DB::table('kelasxis')->insert([
            'foto' => 'pkwu2.jpg',
            'bahanajar' => 'Kewirausahaan',
            'kelas' => 'XI',
            'deskripsi' => '<p>Pada Sekolah Menengah kelas X, XI dan XII pembelajaran Prakarya</p>
            <p>disinergikan dengan kompetensi Kewirausahaan, yaitu dalam Mata</p>
            <p>Pelajaran Prakarya dan Kewirausahaan. Kewirausahaan merupakan</p>
            <p>kemampuan yang sangat penting dimiliki untuk dapat berperan di masa </p>
            <p>depan.</p>',
            'link' => 'https://drive.google.com/file/d/1Utr-gm-q8cuQmpJGC1WlPLASCsnE6nHu/view',
        ]);
        DB::table('kelasxis')->insert([
            'foto' => 'indo2.jpg',
            'bahanajar' => 'Sejarah Indonesia',
            'kelas' => 'XI',
            'deskripsi' => '<p>Pembahasan dalam buku ini meliputi masa VOC hingga masa </p>
            <p>revolusi.  Buku ini menyajikan contoh-contoh suatu peristiwa  </p>
            <p>kekinian yang dapat dihubungkan dengan peristiwa masa lampau.</p> ',
            'link' => 'https://drive.google.com/file/d/1RBlEYtsxf6etSUQEHOYmc9VCRSLqeSWz/view',
        ]);
    }
}
