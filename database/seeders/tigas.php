<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class tigas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tigas')->insert([
            'foto' => 'menyunting.jpg',
            'bahanajar' => 'Menyunting Vidio',
            'kelas' => 'XII',
            'deskripsi' => '<p>Pengeditan video adalah manipulasi dan pengaturan pengambilan video.</p>
            <p>Pengeditan video digunakan untuk menyusun dan menyajikan semua informasi</p>
            <p>video, termasuk film dan acara televisi, iklan video.</p>',
            'link' => 'https://drive.google.com/file/d/12MMbUM7pqBsg8aRAcYWQXPhok0qzvrGl/view',

        ]);
        DB::table('tigas')->insert([
            'foto' => 'sql.jpg',
            'bahanajar' => 'Basis Data',
            'kelas' => 'XII',
            'deskripsi' => '<P>Penyajian buku teks untuk Mata Pelajaran ′′Basis Data′′ </p>
            <P>ini disusun dengan tujuan agar supaya peserta didik</p>
            <p>dapat melakukan proses pencarian pengetahuan berkenaan dengan</p>
            <P>materi pelajaran melalui berbagai aktivitas proses sains</p>
            <p>sebagaimana dilakukan oleh para ilmuwan dalam melakukan</p>
            <p>eksperimen ilmiah (penerapan scientifik), dengan demikian</p>
            <p>peserta didik diarahkan untuk menemukan sendiri berbagai fakta</p>
            <p>, membangun konsep, dan nilai-nilai baru secara mandiri.</p> ',
            'link' => 'https://drive.google.com/file/d/1lTmFyovVHk7VT7aW_MUSPzIg7rSBIanz/view',

        ]);
        DB::table('tigas')->insert([
            'foto' => 'mysql.jpg',
            'bahanajar' => 'Mysql',
            'kelas' => 'XII',
            'deskripsi' => '<p>Website tentu saja membutuhkan database server atau hosting</p>
            <p>untuk menampung berbagai macam informasi. Berbagai macam data</p>
            <p>dibutuhkan oleh website seperti username, password, font,</p>
            <p>URL, dan sejenisnya. MySQL adalah salah satu sistem manajemen</p>
            <p>database yang biasa digunakan untuk mengelola data tersebut.</p> ',
            'link' => 'https://drive.google.com/file/d/15KtlWgi2o21XryyuEc9gK9rc7B9bzoRV/view',

        ]);
    }
}
