<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kelasxes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelasxes')->insert([
            'foto' => 'indonesia.jpg',
            'bahanajar' => 'Bahasa Indonesia',
            'kelas' => 'X',
            'deskripsi'=> '<p>Pada Kurikulum 2013, pengembangan kurikulum
            mata pelajaran Bahasa</p>
        <p>Indonesia menggunakan pendekatan pembelajaran
            bahasa berbasis teks.</p>
        <p>Melalui pendekatan ini diharapkan siswa mampu
            memproduksi dan </p>
        <p>menggunakan teks sesuai dengan tujuan dan
            fungsi sosialnya, </p>
        <p>bahasa Indonesia diajarkan bukan sekadar
            sebagai pengetahuan bahasa,</p>
        <p> melainkan sebagai teks yang mengemban fungsi
            untuk menjadi sumber </p>
        <p>aktualisasi diri penggunanya pada konteks
            sosial-budaya akademis.</p>',
            'link' => 'https://drive.google.com/file/d/1SdK6VfeNCVo6V-sBmliOM5lWSvBEbmuQ/view?usp=sharing',

        ]);
        DB::table('kelasxes')->insert([
            'foto' => 'english.jpg',
            'bahanajar' => 'Bahasa Inggris',
            'kelas' => 'X',
            'deskripsi' => '<p>Bahasa Inggris untuk SMK Buku 1, yang dirancang berdasarkan kompetensi</p>
            <p>dasar
            ditetapkan oleh Pusat Kurikulum 2005,</p>
            <p>ditulis untuk memenuhi kebutuhan
            sumber untuk pengajaran dan</p>
             <P>pembelajaran bahasa Inggris di sekolah kejuruan.</p>',
            'link' => 'https://drive.google.com/file/d/1jzjMDNYBltvgSTW_j3NUr0kFqwhu-dHh/view',
        ]);
        DB::table('kelasxes')->insert([
            'foto' => 'fisika.jpg',
            'bahanajar' => 'Fisika',
            'kelas' => 'X',
            'deskripsi' => '<p>Modul yang disajikan merupakan modul implementasi kurikulum 2013</p>
            <p>sehingga bahan materi sesuai dengan standar kompetensi Fisika Kelas 10 </p>
            <p>Kurikulum 2013. Sedangkan Buku Elektronik yang disajikan masih</p>
            <p> merupakan KTSP yang umumnya merupakan terbitan tahun 2013.</p>',
            'link' => 'https://drive.google.com/file/d/1guMxYi6nNaUGov7DiXUj0-nnqDO_MUNy/view',

        ]);
        DB::table('kelasxes')->insert([
            'foto' => 'k3lh.jpg',
            'bahanajar' => 'K3LH',
            'kelas' => 'X',
            'deskripsi' => '<p>Untuk mempelajari dan menguasai modul ini, terlebih dahulu anda</p>
            <p>harus mempunyai gambaran wawasan kemampuan dasar dalam</p>
            <p>pemahaman tentang K3L secara umum. Selain itu anda juga </p>
            <p>harus memahami eksistensi atau gambaran pentingnya K3L terkait </p>
            <p>dengandunia kerja secara umum.Kemampuam awal ini sangat bermanfaat </p>
            <p> dalam menunjang penguasaan materi modul ini secara cepat dan tepat </p>
            <p>sehingga sesuai sasaran yang diharapkan</p> ',
            'link' => 'https://drive.google.com/file/d/19NCE_tdJVEpOUrkvYXb3LAzZzL-AQDBw/view',


        ]);
    }
}
