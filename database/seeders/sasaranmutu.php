<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class sasaranmutu extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sasaranmutus')->insert([
            'judul' => 'Sasaran Mutu',
            'deskripsi' => '<ul> <li>Tamatan di semua kompetensi keahlian terserap di lapangan kerja dan melanjutkan kuliah <ul> <li>Terealisasinya institusi pasangan baru baru yang berstandar nasional/internasional, minimal 2 Dunia Usaha/Dunia Industri/Instansi.</li> </ul> </li> </ul>',

        ]);
        DB::table('sasaranmutus')->insert([
            'judul' => 'Langkah Langkah Strategis',
            'deskripsi' => '<ul> <li>Membantu Waka Humas dalam melakukan promosi ke Dunia Usaha/Industri/Instansi <ul> <li>Memiliki data/peta dunia kerja para alumni</li> <li>Menjalin kemitraan dengan Dunia Usaha/Industri/Instansi</li> <li>Memberikan informasi kepada alumni tentang lowongan kerja</li> <li>Membuka pendaftaran calon tenaga kerja yang melamar</li> <li>Memberikan pembekalan materi ketenagakerjaan kepada alumni;</li> <li>Menfasilitasi industri dalam pelaksanaan seleksi calon karyawan di sekolah</li> <li>Mengirim calon tenaga kerja yang sudah terseleksi ke industri (optional)</li> <li>Melakukan pendataan alumni yang sudah lulus</li> <li>Melakukan survey kepuasan pelanggan untuk evaluasi.</li> </ul> </li> </ul>',

        ]);
        DB::table('sasaranmutus')->insert([
            'judul' => 'Data Pemantauan',
            'deskripsi' => '<ul> <li>Peta Industri di Pasuruan Raya, Jawa Timur dan Indonesiai. <ul> <li>Adanya permintaan tenaga kerja dari Dunia Usaha/Industri/Instansi.</li> <li>Adanya pengumuman lowongan kerja kepada alumni.</li> <li>Adanya materi pembekalan tes dan daftar hadir pembekalan tes.</li> <li>Adanya pengantar pengiriman berkas calon peserta tes seleksi ke Dunia Usaha/Dunia Industri/Institusi (DU/DI).</li> <li>Adanya berita acara dan daftar hadir pelaksanaan tes).</li> <li>Jika memungkinkan pengantaran calon karyawan ke DU/DI didampingi tim Humas/BKK.</li> <li>Adanya data alumni yang terserap di Dunia Usaha/Industri/Instansi.</li> <li>Adanya bukti dan analisis survey kepuasan pelanggan dari Dunia Usaha/Dunia Industri/Institusi, alumni, dan orang tua.</li> </ul> </li> </ul>',

        ]);
    }
}
