<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class kompetensikeahlian extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kompetensikeahlians')->insert([
            'foto' => 'rpl.png',
            'nama_jurusan' => 'Rekayasa Perangkat Lunak',
            'foto_detail' => 'code.jpg',
            'deskripsi' => '<div> <div>Rekayasa perangkat lunak adalah pendekatan rekayasa sistematis untuk pengembangan perangkat lunak. Seorang insinyur perangkat lunak adalah orang yang menerapkan prinsip-prinsip rekayasa perangkat lunak untuk merancang, mengembangkan, memelihara, menguji, dan mengevaluasi perangkat lunak komputer.</div> </div>',
        ]);
        DB::table('kompetensikeahlians')->insert([
            'foto' => 'dkv.png',
            'nama_jurusan' => 'Desan Komunikasi Visual',
            'foto_detail' => 'dkv.jpeg',
            'deskripsi' => '<p>Multimedia adalah bentuk komunikasi yang menggunakan kombinasi berbagai bentuk konten seperti teks, audio, gambar, animasi, atau video menjadi satu presentasi interaktif, berbeda dengan media massa tradisional, seperti bahan cetak atau rekaman audio, yang menampilkan sedikit fitur. tidak ada interaksi antar pengguna.</p>',
        ]);
        DB::table('kompetensikeahlians')->insert([
            'foto' => 'tkj.png',
            'nama_jurusan' => 'Teknik Komputer Jaringan',
            'foto_detail' => 'tekaje.jpg',
            'deskripsi' => '<p>Teknik Komputer dan Jaringan atau yang biasa disebut TKJ adalah&nbsp;<strong>teknik yang mempelajari tentang cara instalasi PC, instalasi LAN, memperbaiki PC dan mempelajari program-program PC</strong>.</p>',
        ]);
        DB::table('kompetensikeahlians')->insert([
            'foto' => 'ka.png',
            'nama_jurusan' => 'Kimia Analisis',
            'foto_detail' => 'analisis.jpg',
            'deskripsi' => '<p><strong>Kimia analisis</strong> adalah studi pemisahan, identifikasi, dan kuantifikasi komponen kimia dalam bahan alam maupun buatan.<sup id="cite_ref-1" class="reference"></sup> Analisis Kualitatif memberikan indikasi identitas spesies kimia&nbsp;di dalam sampel. Sedangkan analisis kuantitatif&nbsp;menentukan jumlah komponen tertentu dalam suatu zat. Pemisahan komponen sering kali dilakukan sebelum melakukan analisis.</p>',
        ]);
        DB::table('kompetensikeahlians')->insert([
            'foto' => 'ki.png',
            'nama_jurusan' => 'Teknik Kimia Industri',
            'foto_detail' => 'industri1.jpg',
            'deskripsi' => '<p>Kimia industri adalah&nbsp;<strong>cabang ilmu kimia yang menerapkan pengetahuan kimiawi terhadap produksi material dan zat kimia khusus dengan sedikit dampak buruk pada lingkungan</strong>.</p>',
        ]);
        DB::table('kompetensikeahlians')->insert([
            'foto' => 'akl.png',
            'nama_jurusan' => 'Akuntansi Keuangan Lembaga',
            'foto_detail' => 'akunntansi.png',
            'deskripsi' => '<p>Kimia industri adalah&nbsp;<strong>cabang ilmu kimia yang menerapkan pengetahuan kimiawi terhadap produksi material dan zat kimia khusus dengan sedikit dampak buruk pada lingkungan</strong>.</p>',
        ]);
        DB::table('kompetensikeahlians')->insert([
            'foto' => 'bdp.png',
            'nama_jurusan' => 'Bisnis Daring Pemasaran',
            'foto_detail' => 'bisnisdaring.png',
            'deskripsi' => '<p>Bisnis Daring dan Pemasaran adalah sebuah kompetensi keahlian (jurusan) yang mempelajari dasar - dasar kemampuan dan keilmuan&nbsp;menjadi seorang marketing baik marketing secara konvensional maupun melalui media daring (online/internet). Di Kompetensi Keahlian Bisnis Daring dan Pemasaran siswa akan mempelajari strategi pasar, kewirausahaan dan membaca peluang di dunia bisnis.&nbsp;&nbsp;</p>',
        ]);
    }
}
