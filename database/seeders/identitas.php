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
            'fotos' => 'sekolah.jpg ',
            'bait1' => '<table cellspacing="1" cellpadding="1"> <tbody> <tr> <td>Nama Sekolah</td> <td><strong>:&nbsp;</strong>&nbsp;</td> <td>SMK Negeri 1 Pasuruan</td> </tr> <tr> <td>N S S</td> <td><strong>:</strong></td> <td>341056603001&nbsp;</td> </tr> <tr> <td>Propinsi</td> <td><strong>:</strong></td> <td>Jawa Timur</td> </tr> <tr> <td>Otonomi Daerah</td> <td><strong>:</strong></td> <td>Kota. Pasuruan</td> </tr> <tr> <td>Kecamatan</td> <td><strong>:</strong></td> <td>Panggung Rejo</td> </tr> <tr> <td>Kelurahan</td> <td><strong>:</strong></td> <td>Bugul Lor</td> </tr> <tr> <td>Jalan</td> <td><strong>:</strong></td> <td>Veteran No.11</td> </tr> <tr> <td>Kode Pos</td> <td><strong>:</strong></td> <td>67122</td> </tr> <tr> <td colspan="3">&nbsp;</td> </tr> <tr> <td>Telp</td> <td><strong>:</strong></td> <td>(0343) 421380</td> </tr> <tr> <td>Fax</td> <td><strong>:</strong></td> <td>(0343) 421380</td> </tr> <tr> <td colspan="3">&nbsp;</td> </tr> <tr> <td>Daerah</td> <td><strong>:</strong></td> <td>Perkotaan</td> </tr> <tr> <td>Status Sekolah</td> <td><strong>:</strong></td> <td>Negeri</td> </tr> <tr> <td colspan="3">&nbsp;</td> </tr> <tr> <td>Kelompok Sekolah</td> <td><strong>:</strong></td> <td>1. Bisnis dan Manajemen</td> </tr> <tr> <td>&nbsp;</td> <td><strong>:</strong></td> <td>2. Teknologi Informasi dan Komunikasi</td> </tr> <tr> <td>&nbsp;</td> <td><strong>:</strong></td> <td>3.&nbsp;Teknologi dan Rekayasa</td> </tr> <tr> <td colspan="3">&nbsp;</td> </tr> <tr> <td>Tahun Berdiri</td> <td><strong>:</strong></td> <td>1978</td> </tr> <tr> <td>Surat Keputusan</td> <td><strong>:</strong></td> <td>Keputusan Menteri Pendidikan dan Kebudayaan tanggal 30 Juli 1980 No. 0209/0/1980</td> </tr> <tr> <td>K B M</td> <td><strong>:</strong></td> <td>Pagi</td> </tr> <tr> <td>No Rekening Bank</td> <td><strong>:</strong></td> <td>&nbsp;</td> </tr> <tr> <td>Bangunan Sekolah</td> <td><strong>:</strong></td> <td>Milik Sendiri</td> </tr> <tr> <td>Status Tanah</td> <td><strong>:</strong></td> <td>Pemerintah</td> </tr> <tr> <td>Luas Tanah</td> <td><strong>:</strong></td> <td>8950 meter persegi</td> </tr> <tr> <td>Lokasi Sekolah</td> <td><strong>:</strong></td> <td>Ditengah Pemukiman Penduduk</td> </tr> <tr> <td>Terletak pada Lintas</td> <td><strong>:</strong></td> <td>Jalan Propinsi</td> </tr> <tr> <td>Org. Penyelenggara</td> <td><strong>:</strong></td> <td>Pemerintah</td> </tr> <tr> <td colspan="3">&nbsp;</td> </tr> <tr> <td>Nama Kepala Sekolah</td> <td><strong>:</strong></td> <td>Drs. AKH. SIGIT SUYANI, M.T, S.ST &nbsp;&nbsp;</td> </tr> <tr> <td>N I P</td> <td><strong>:</strong></td> <td>19651216 199403 1 002</td> </tr> <tr> <td>Alamat</td> <td><strong>:</strong></td> <td>Prambon - Sidoarjo</td> </tr> </tbody> </table>',
        ]);
    }
}
