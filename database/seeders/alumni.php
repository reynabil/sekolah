<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class alumni extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alumnis')->insert([
            'foto' => 'siswa.jpg',
            'nama_alumni' => 'Muhammad Rahmatullah',
            'alamat' => 'Pasuruan',
            'email' => 'rahmat@gmail.com',
            'no_telp' => '081981238765',
            'tahunlulus' => '2019',
            'jurusan' => 'Rekayasa Perangkat Lunak',
            'pekerjaan' => 'Dosen Pengajar',
            'pendidikan' => 'Sarjana Komputer, Univeristas Brawijaya, IND',
            'pengalaman' => '3 Tahun Dalam Menjadi Dosen',
            'penghargaan' => 'Penghargaan Dosen Terbaik',
            'testimoni' => '<p>Dengan pengalaman pembelajaran di SMKN 1 Pasuruan menjadi bekal saya didunia luar ,dan saya berterimakasih kepada guru guru saya yang telah mendidik ,mengajari saya dengan sabar begitupun teman teman seangkatan saya dan pengalaman organisasi disekolah seperti OSIS,Pramuka dll pasti juga sangat berguna.<br>Saya ucapkan terimakasih untuk SMKN 1 Pasuruan ,semoga tambah maju tambah sukses tambah jaya.</p> <p>&nbsp;</p>'
        ]);
        DB::table('alumnis')->insert([
            'foto' => 'siswa.jpg',
            'nama_alumni' => 'Muhammad Rahmatullah',
            'alamat' => 'Pasuruan',
            'email' => 'rahmat@gmail.com',
            'no_telp' => '081981238765',
            'tahunlulus' => '2019',
            'jurusan' => 'Rekayasa Perangkat Lunak',
            'pekerjaan' => 'Dosen Pengajar',
            'pendidikan' => 'Sarjana Komputer, Univeristas Brawijaya, IND',
            'pengalaman' => '3 Tahun Dalam Menjadi Dosen',
            'penghargaan' => 'Penghargaan Dosen Terbaik',
            'testimoni' => '<p>Dengan pengalaman pembelajaran di SMKN 1 Pasuruan menjadi bekal saya didunia luar ,dan saya berterimakasih kepada guru guru saya yang telah mendidik ,mengajari saya dengan sabar begitupun teman teman seangkatan saya dan pengalaman organisasi disekolah seperti OSIS,Pramuka dll pasti juga sangat berguna.<br>Saya ucapkan terimakasih untuk SMKN 1 Pasuruan ,semoga tambah maju tambah sukses tambah jaya.</p> <p>&nbsp;</p>'
        ]);
        DB::table('alumnis')->insert([
            'foto' => 'siswa.jpg',
            'nama_alumni' => 'Muhammad Rahmatullah',
            'alamat' => 'Pasuruan',
            'email' => 'rahmat@gmail.com',
            'no_telp' => '081981238765',
            'tahunlulus' => '2019',
            'jurusan' => 'Rekayasa Perangkat Lunak',
            'pekerjaan' => 'Dosen Pengajar',
            'pendidikan' => 'Sarjana Komputer, Univeristas Brawijaya, IND',
            'pengalaman' => '3 Tahun Dalam Menjadi Dosen',
            'penghargaan' => 'Penghargaan Dosen Terbaik',
            'testimoni' => '<p>Dengan pengalaman pembelajaran di SMKN 1 Pasuruan menjadi bekal saya didunia luar ,dan saya berterimakasih kepada guru guru saya yang telah mendidik ,mengajari saya dengan sabar begitupun teman teman seangkatan saya dan pengalaman organisasi disekolah seperti OSIS,Pramuka dll pasti juga sangat berguna.<br>Saya ucapkan terimakasih untuk SMKN 1 Pasuruan ,semoga tambah maju tambah sukses tambah jaya.</p> <p>&nbsp;</p>'
        ]);

    }
}
