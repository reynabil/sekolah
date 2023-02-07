<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class identitas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('identitas')->insert([
            'fotos' => 'skensa1.png',
            'bait1' => '<p>Nama Sekolah &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: SMK Negeri 1 Pasuruan</p>
            <p>N S S &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                : 341056603001</p>
            <p> Propinsi &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : Jawa
                Timur</p>
            <p> Otonomi Daerah &nbsp; &nbsp; &nbsp; &nbsp; : Kota. Pasuruan</p>
            <p> Kecamatan &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : Panggung Rejo</p>
            <p>Kelurahan &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : Bugul Lor</p>
            <p>Jalan &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                : Veteran No.11</p>
            <p>Kode Pos &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : 67122</p>
            <p>Telp &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; : (0343) 421380</p>
        <p>Fax &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; : (0343) 421380</p>

        <p>Daerah &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :
            Perkotaan</p>
        <p>Status Sekolah &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : Negeri</p>

        <p> Kelompok Sekolah &nbsp; &nbsp; &nbsp; : 1. Bisnis dan Manajemen</p>
        <p> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 2. Teknologi Informasi dan Komunikasi</p>
        <p> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 3. Teknologi dan Rekayasa</p>
        <p>Tahun Berdiri &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : 1978</p>
            <p>Surat Keputusan &nbsp; &nbsp; &nbsp; : Keputusan Menteri Pendidikan dan Kebudayaan tanggal 30 Juli 1980 No.
                0209/0/1980</p>
            <p>K B M &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : Pagi</p>
            <p>No Rekening Bank &nbsp; &nbsp;  :</p>
            <p>Bangunan Sekolah &nbsp; &nbsp;  : Milik Sendiri</p>
            <p>Status Tanah &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  : Pemerintah</p>
            <p> Luas Tanah &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : 8950 meter persegi</p>
            <p>Lokasi Sekolah &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : Ditengah Pemukiman Penduduk</p>
            <p>Terletak pada Lintas &nbsp;  : Jalan Propinsi</p>
            <p>Org. Penyelenggara &nbsp; : Pemerintah</p>
            <p>Nama Kepala Sekolah : Drs. AKH. SIGIT SUYANI, M.T, S.ST</p>
            <p>N I P &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : 19651216 199403 1 002</p>
            <p>Alamat &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  : Prambon - Sidoarjo</p>',
        ]);
    }
}
