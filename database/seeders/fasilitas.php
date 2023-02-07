<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class fasilitas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fasilitas')->insert([
            'icon'=>'<i class="fas fa-home"></i>',
            'nama_ruang'=>'Ruang Kelas',
            'jumlah'=>'44',
        ]);
        DB::table('fasilitas')->insert([
            'icon'=>'<i class="fas fa-flask"></i>',
            'nama_ruang'=>'Ruang Laboratorium',
            'jumlah'=>'22',
        ]);
        DB::table('fasilitas')->insert([
            'icon'=>'<i class="fas fa-volleyball-ball"></i>',
            'nama_ruang'=>'Ruang Ekskul',
            'jumlah'=>'15',
        ]);
        DB::table('fasilitas')->insert([
            'icon'=>'<i class="fas fa-laptop-house"></i>',
            'nama_ruang'=>'Ruang Kantor',
            'jumlah'=>'6',
        ]);
        DB::table('fasilitas')->insert([
            'icon'=>'<i class="fas fa-broadcast-tower"></i>',
            'nama_ruang'=>'Ruang Broadcast',
            'jumlah'=>'1',
        ]);
        DB::table('fasilitas')->insert([
            'icon'=>'<i class="fas fa-book"></i>',
            'nama_ruang'=>'Perpustakaan',
            'jumlah'=>'1',
        ]);
        DB::table('fasilitas')->insert([
            'icon'=>'<i class="fas fa-mosque"></i>',
            'nama_ruang'=>'Musholla',
            'jumlah'=>'1',
        ]);
        DB::table('fasilitas')->insert([
            'icon'=>'<i class="fas fa-handshake-alt"></i>',
            'nama_ruang'=>'Ruang Rapat',
            'jumlah'=>'1',
        ]);
        DB::table('fasilitas')->insert([
            'icon'=>'<i class="fas fa-motorcycle"></i>',
            'nama_ruang'=>'Tempat Parkir',
            'jumlah'=>'2',
        ]);
        DB::table('fasilitas')->insert([
            'icon'=>'<i class="fas fa-home"></i>',
            'nama_ruang'=>'Gazebo',
            'jumlah'=>'4',
        ]);
        DB::table('fasilitas')->insert([
            'icon'=>'<i class="fas fa-utensils"></i>',
            'nama_ruang'=>'Kantin',
            'jumlah'=>'2',
        ]);
        DB::table('fasilitas')->insert([
            'icon'=>'<i class="fas fa-shopping-cart"></i>',
            'nama_ruang'=>'Business Center',
            'jumlah'=>'1',
        ]);
    }
}
