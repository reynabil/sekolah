<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class visimisi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('visimisis')->insert([
            'foto' => '1679884882.png',
            'visi' => 'Terwujudnya insan yang berakhlak mulia, kreatif, inovatif, mandiri, dan peduli lingkungan.',
            'misi' => '<p>1. Meningkatkan Nilai Keimanan dan Ketaqwaan kepada Tuhan Yang Maha Esa</p>
            <p> 2. Menumbuhkembangkan Jiwa Nasionalisme</p>
            <p>3. Meningkatkan Prestasi dalam Ilmu
                Pengetahuan, Teknologi, Seni Budaya dan Olahraga</p>
            <p> 4. Menumbuhkembangkan
                Kreatifitas, Inovatif dan Produktifitas dalam Peningkatan Mutu Pendidikan
            </p>
            <p>5.
                Menumbuhkembangkan Kemandirian</p>
            <p>6. Menanamkan sikap pelestarian Lingkungan,
                Pencegahan Terjadinya Pencemaran dan Kerusakan Lingkungan. </p>',
            'tujuan' => '<p>1.    Terwujudnya peserta didik yang memiliki Nilai Keimanan dan Ketaqwaan kepada Tuhan Yang Maha Esa

            <p>2.    Terwujudnya peserta didik yang memiliki Jiwa Nasionalisme</p>

            <p> 3.    Terwujudnya peserta didik yang memiliki Prestasi Ilmu Pengetahuan, Teknologi, Seni Budaya dan Olahraga di tingkat         Nasional dan Internasional</p>

            <p> 4.    Terwujudnya peserta didik yang memiliki Kecakapan hidup yang mampu bersaing dalam tataran  global</p>

         <p> 5.    Terwujudnya  peserta didik yang memiliki kreatifitas, inovasi, produktifitas dan kinerja yang tinggi</p>

           <p>6.    Terwujudnya peserta didik yang memiliki Jiwa kemandirian , dan mampu adaptasi sesuai perkembangan zaman</p>

           <p>7.    Terwujudnya kegiatan pembelajaran yang kondusif, lingkungan yang bersih, asri dan nyaman.</p>

           <p> 8.   Terbentuknya sikap upaya untuk pelestarian lingkungan hidup di sekitarnya sesuai  dengan fungsinya</p>

          <p>9.   Terbentuknya sikap mampu mengatasi terjadi pencemaran yang mengakibatkan kerusakan lingkungan</p>',
            'komitmen' => '<p>Pelangi : Peduli Lingkungan</p>

            <p> S : Sekolah</p>

            <p> B : Beauty = Indah/keindahan</p>

            <p>I : Interest = Menarik/menawan</p>

            <p>R : Reassure = Mengagumkan/menakjubkan</p>

            <p> U : Untiring = Tidak mengenal lelah/tidak melelahkan</p>',
        ]);
    }
}
