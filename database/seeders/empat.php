<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class empat extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empats')->insert([
            'foto' => 'sumber.jpeg',
            'bahanajar' => 'Keberadaan sumber, siklus dan kegunaan
            <p>air</p> ',
            'kelas' => 'XIII KA',
            'deskripsi' => '<p>Materi ini membantu kita untuk mengetahui tentang keberadaan sumber</p>
            <p>siklus dan kegunaan air</p> ',
            'link' => 'https://drive.google.com/file/d/1BGCQq-E4PtWiGpETQTqGbtF-pBUOxNOK/view',
        ]);
        DB::table('empats')->insert([
            'foto' => 'kroma.jpeg',
            'bahanajar' => 'Kromatografi Gas',
            'kelas' => 'XIII KA',
            'deskripsi' => '<p>Kromatografi gas digunakan untuk memisahkan campuran yang</p>
            <p>komponen – komponennya dapat menguap pada suhu percobaan</p>
            <p> dan tidak terurai (sebelum suhu 400℃) dengan mengunakan</p>
            <p>gas sebagai fase gerak.</p>',
            'link' => 'https://drive.google.com/file/d/1nirshWm07sHM6KVezeCIn7jR8EKQ8Xs0/view',
        ]);
        DB::table('empats')->insert([
            'foto' => 'verif.jpeg',
            'bahanajar' => 'Penataan lab dan verifikasi alat ukur',
            'kelas' => 'XIII KA',
            'deskripsi' => '<p>Pemeliharaan kondisi akomodasi dan lingkungan laboratorium yang baik, </p>
            <p>selain untuk mencapai keabsahan mutu data juga dapat melindungi</p>
            <p>personel laboratorium dari bahaya bahan kimia, kebakaran, serta</p>
            <p>bahaya lain yang timbul.</p>',
            'link' => 'https://drive.google.com/file/d/1xXMl5AI870dkUXO9zrGUagdl8zPyNnWj/view',
        ]);
    }
}
