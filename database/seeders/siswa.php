<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class siswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswaditerimas')->insert([
            'id_judul' => '1',
            'foto_siswa' => 'siswa.jpg',
            'nisn' => '12312',
            'nama_siswa' => 'Muhammad Rahmatullah',
            'email' => 'Rahmat1@gmail.com',
            'no_telp' => '081234567890',
            'jeniskelamin' => 'laki-laki',
        ]);
        DB::table('siswaditerimas')->insert([
            'id_judul' => '1',
            'foto_siswa' => 'siswa.jpg',
            'nisn' => '12311',
            'nama_siswa' => 'Muhammad Rahmatullah',
            'email' => 'Rahmat2@gmail.com',
            'no_telp' => '081234567890',
            'jeniskelamin' => 'laki-laki',
        ]);
        DB::table('siswaditerimas')->insert([
            'id_judul' => '1',
            'foto_siswa' => 'siswa.jpg',
            'nisn' => '12313',
            'nama_siswa' => 'Muhammad Rahmatullah',
            'email' => 'Rahmat3@gmail.com',
            'no_telp' => '081234567890',
            'jeniskelamin' => 'laki-laki',
        ]);
        DB::table('siswaditerimas')->insert([
            'id_judul' => '1',
            'foto_siswa' => 'siswa.jpg',
            'nisn' => '12314',
            'nama_siswa' => 'Muhammad Rahmatullah',
            'email' => 'Rahmat4@gmail.com',
            'no_telp' => '081234567890',
            'jeniskelamin' => 'laki-laki',
        ]);
        DB::table('siswaditerimas')->insert([
            'id_judul' => '1',
            'foto_siswa' => 'siswa.jpg',
            'nisn' => '12315',
            'nama_siswa' => 'Muhammad Rahmatullah',
            'email' => 'Rahmat5@gmail.com',
            'no_telp' => '081234567890',
            'jeniskelamin' => 'laki-laki',
        ]);
        DB::table('siswaditerimas')->insert([
            'id_judul' => '1',
            'foto_siswa' => 'siswa.jpg',
            'nisn' => '12316',
            'nama_siswa' => 'Muhammad Rahmatullah',
            'email' => 'Rahmat6@gmail.com',
            'no_telp' => '081234567890',
            'jeniskelamin' => 'laki-laki',
        ]);
    }
}
