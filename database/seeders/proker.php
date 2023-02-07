<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class proker extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prokers')->insert([
            'foto' => 'kompetensi.jpg',
            'tujuan' => 'Melakukan Perencanaan PPDB',
            'kegiatan' => 'Melakukan koordinasi dengan kepala wakil,wakil kepala dan ketua kompeten',
            'indikator' => '<p> 1. Tersusunnya materi promosi</p>
            <p> 2. Adanya peta sekolah sebagai sasaran promosi
            </p>
            <p> 3. Tersusunnya panitia PPDB didalam kegiatan
                promosi</p>',
            'penanggungjk' => '<p> 1.Waka Humas</p>
            <p> 2.Waka Kesiswaan</p>',
            'batas_waktu' => '2023-02-06',
        ]);
        DB::table('prokers')->insert([
            'foto' => 'kompetensi.jpg',
            'tujuan' => 'Melaksanakan kegiatan PPDB',
            'kegiatan' =>'Melakukan kegiatan PPDB melalui online',
            'indikator' => '<p> 1. Terlaksananya PPDB sesuai jadwal</p>
            <p> 2. Tahap 1 melalui jalur afirmasi,perpindahan
                ortu & prestasi</p>
            <p> 3. Tahap 2 melalui jalar reguler menggunakan
                rata-rata nilai rapot</p>',
            'penanggungjk' => '<p> 1.Waka Kesiswaan</p>
            <p> 2.Panitia PPDB</p>',
            'batas_waktu' => '2023-02-06',
        ]);
        DB::table('prokers')->insert([
            'foto' => 'kompetensi.jpg',
            'tujuan' => '<h3>Siswa mengikuti MPLS sebelum</h3>
            <h3> mengikuti kegiatan belajar mengajar</h3>',
            'kegiatan' =>'Menyusun program masa pengenalan siswa baru(MPLS)melalui daring',
            'indikator' => '<p> 1. Terlaksananya PPDB sesuai jadwal</p>
            <p> 2. Siswa yang mengikuti MPLS mendapat hasil sesuai target</p>',
            'penanggungjk' => '<p> 1.Panitia MPLS</p>',
            'batas_waktu' => '2023-02-06',
        ]);
        DB::table('prokers')->insert([
            'foto' => 'peringatan.jpg',
            'tujuan' => '<h3>Siswa tidak ada yang melakukan</h3>
            <h3>pelanggaran</h3> ',
            'kegiatan' =>'<p>Melaksanakan sosialisasi tentang peraturan tata tertib dan tata krama</p>
            <p> bekerjasama dengan instansi terkait dalam kegiatan penanganan prefentif</p>',
            'indikator' => '<p> 1. Siswa mengetahui aturan tatatertib yang diberlakukan sekolah</p>
            <p> 2. Terlaksananya kegiatan yang melibatkan instansi terkait,kepolisian,Puskesmas,pertanian dalam kegiatan tertentu</p>
            <p>3. Adanya petugas yang melakukan pemantauan pelanggaran siswa</p>
            <p>4. Terlaksananya razia kelas setiap bulan adanya  penanganan oleh BK/BP</p>',
            'penanggungjk' => '<p> 1. Waka Kesiswaan</p>
            <p>2. BP/BK</p>
            <p>3. Tim Kedisiplinan</p>',
            'batas_waktu' => '2023-02-06',
        ]);
        DB::table('prokers')->insert([
            'foto' => 'corona.jpg',
            'tujuan' => '<h3>Siswa tidak ada yang mutasi atau </h3>
            <h3> Drop Out</h3>',
            'kegiatan' =>'Melakukan penanganan secara diri sesuai dengan aturan tata tertib dan tata sekolah',
            'indikator' => '<p> 1. Adanya penanganan secara diri sesuai dengan aturan penanganan siswa</p>
            <p> 2. Keberhasilan penanganan  siswa sehingga tidak mutasi / DO</p>
            <p>3. Tidak ada siswa yang DO atau mutasi</p>',
            'penanggungjk' => '<p> 1.BP/BK</p>
            <p>2. Wali Kelas</p>',
            'batas_waktu' => '2023-02-06',
        ]);
        DB::table('prokers')->insert([
            'foto' => 'prestasi.jpg',
            'tujuan' => '<h3>Mendapat juara,Tingkat Nasional dan  </h3>
            <h3>regional dalam kegiatan Olah Raga,</h3>
            <h3>Kesenian,pada Olimpiade atau </h3>
            <h3>lomba kompeten siswa</h3>',
            'kegiatan' =>'<p>1.Melakukan penyeleksian siswa</p>
            <p>2. Terlaksananya pembinaan terhadap calon peserta yang akan diikutkan lomba</p>
            <p>3. Mengikuti kegiatan pertandingan atau lomba Tingkat Kota,Propinsi,Nasional</p>',
            'indikator' => '<p> 1. Terpilihnya nama siswa yang akan diikutkan lomba</p>
            <p> 2.Terbentuknya kepanitian,Guru pembina,guru pendamping lomba</p>',
            'penanggungjk' => '<p> 1.Kaprog</p>
            <p>2. Guru Olahraga</p>
            <p>3. Waka Kesiswaan</p>',
            'batas_waktu' => '2023-02-06',
        ]);
        DB::table('prokers')->insert([
            'foto' => 'voli.jpeg',
            'tujuan' => '<h3>Pemantauan Kegiatan Ekstrakurikuler</h3>',
            'kegiatan' =>'<p>1. Menentukan Pembina sebagai penanggung jawab kegiatan</p>
            <p>2. menetapkan jadwal kegiatan</p>',
            'indikator' => '<p>1. SK pembagian tugas pembina ekstrakurikuler</p>
            <p> 2. Adanya jadwal Ekstrakurikuler</p>',
            'penanggungjk' => '<p> 1. Kepala Sekolah</p>
            <p>2. Waka Kesiswaan</p>
            <p>3. Pembina Ekstrakurikuler',
            'batas_waktu' => '2023-02-06',
        ]);
    }
}
