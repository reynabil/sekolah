<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class berita extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('beritas')->insert([
            'foto' => 'prestasi.jpg',
            'created_at' => '2023-01-30 13:00:00',
            'judul' => 'HASIL LOMBA KOMPETENSI SISWA SMK WILAYAH KERJA 2',
            'deskripsi' => 'Kegiatan Lomba Kompetensi Siswa (LKS) dilaksanakan pada tanggal 24-26 Januari 2022 yang diikuti oleh siswa SMK Wilayah Kerja (Wilker) II yang dilaksanakan di Kabupaten Situbondo, Bondowoso, Banyuwangi, dan Jember. Kepala Dinas Pendidikan Jawa Timur, Dr. Ir. Wahid Wahyudi, MT di SMKN 1 Panji Situbondo ikut serta membuka kegitan LKS Wilker II Tahun 2022. Perwakilan beberapa siswa terbaik dari SMKN 1 Pasuruan berpartisipasi untuk mengikuti Lomba Kompetensi Siswa Tahun 2022. Diantaranya siswa bernama M. Khoirul Anwar dari Kelas XII Multimedia I meraih peringkat I dalam bidang Teknik Perancangan Model 3D), Orchid Rikihama A.M. dari Kelas XII Kimia Industri meraih peringkat II dalam bidang Chemistry, Masyuan Novila R. dari Kelas XII Bisnis Daring dan Pemasaran meraih peringkat II dalam bidang bidang Marketing Online, Rahdita Septiani dari Kelas XII Mutimeda I meraih peringkat IV dalam bidang Graphic Design Technology, dan Arzaqul Mughni dari Kelas XII Teknik Komputer & Jaringan II meraih peringkat V dalam bidang IT Network System Administration. Dari hasil Lomba Kompetensi Siswa Wilker II Tahun 2022, kelima bidang tersebut berhasil melanjutkan ke tingkat Provinsi Jawa Timur.',
        ]);
        DB::table('beritas')->insert([
            'foto' => 'kompetensi.jpg',
            'created_at' => '2023-01-30 13:00:00',
            'judul' => 'LKS SMK KE-30 TINGKAT PROVINSI JAWA TIMUR  2022 ',
            'deskripsi' => 'Agenda kegiatan Lomba Kompetensi Siswa (LKS) SMK Ke-30 tingkat provinsi Jawa Timur Tahun 2022 diselenggarakan pada tanggal 24-27 Maret 2022 yang diikuti siswa seluruh siswa terbaik di masing-masing Wilayah Kerja (Wilker) Provinsi Jawa Timur. Adapun kategori yang lomba sebanyak 53 bidang. Sedangkan kategori lomba yang diikuti SMKN 1 Pasuruan terdiri dari Teknik Perancangan Model 3D, Chemistry, Marketing Online, Graphic Design Technology, IT Networking System Administration, Artificial Intelegent, Cloud Computing, dan Information Network Cabling.

            Acara Lomba Kompetensi Siswa (LKS) SMK Provinsi Jawa Timur ke-30 tahun 2022 ini dibuka oleh sambutan Gubernur Jawa Timur Khofifah Indar Parawansa bertempat di Gedung Kesenian Aryo Blitar. Pesan khusus disampaikan oleh Gubernur Jawa Timur, Khofifah Indar Parawansa “Mari kita kawal bersama bagaimana Provinsi Jawa Timur bisa menjadi juara umum LKS Tingkat Nasional Tahun 2022”. Melihat banyaknya potensi dan peluang untuk siswa SMK di Jawa Timur, beliau berharap agar SMK di Jawa Timur menjuarai LKS Tingkat Nasional. Prestasi tersebut dapat menjadi tolok ukur pengembangan kompetensi baik bagi para siswa SMK maupun untuk guru.

Dalam acara tersebut salah satu siswa SMK Negeri 1 Pasuruan mendapat juara 3 dalam kategori Teknik Perancangan Model 3D. Siswa tersebut bernama Muhammad Khoirul Anwar dari kelas XII jurusan Multimedia. Ia berhasil mengembangkan karakter game yang bisa dijalankan melalui aplikasi. Untuk profil lengkapnya sebagai berikut.

“Nama saya Muhammad Khoirul Anwar, saya dari kelas XII Multimedia 1. Saya adalah perwakilan SMK Negeri 1 Pasuruan dalam Lomba Kompetensi Siswa dalam bidang lomba Teknik Perancangan Model 3D. Lomba dilaksanakan pada bulan Januari 2022, dan diadakan seleksi secara wilker, dan saya berhasil mendapat juara pertama. Jadi setelah lolos di LKS Wilker kemarin, saya lanjut ke tingkat provinsi Jawa Timur.

Di tingkat provinsi ini, yang menjadi tuan rumah adalah jurusan animasi SMK Negeri 12 Surabaya. Tema yang diangkat dalam lomba kali ini adalah tokoh pewayangan. Dalam naskah soal kami para peserta diberikan deskripsi singkat salah satu tokoh wayang tanpa menyebutkan nama tokoh tersebut, lalu kami diminta untuk membuat model karakter sesuai dengan beberapa poin yang telah ditentukan dalam naskah soal.

Dalam naskah kami diharuskan membuat beberapa atribut karakter tersebut, dan boleh dibuat sekreatif dan semenarik mungkin selama masih dalam konteks yang diminta dalam soal. Karakter yang diminta adalah Gatot Kaca, dengan beberapa atribut seperti gelang tangan, rompi perisai, mahkota, dll. Karakter yang dibuat harus bisa digerakkan dalam platform Unreal Engine, jadi selama pengerjaan saya sering berpindah aplikasi, dadi Blender ke Unreal dan sebaliknya.

Waktu yang diberikan oleh panitia adalah 16 jam pengerjaan yang dibagi menjadi 3 hari, dimulai hari Kamis hingga Sabtu. Saat hari pertama setelah base karakter sudah bisa digerakkan di Unreal, muncul masalah yaitu adanya beberapa vertex yang menyatu dengan tulang yang tidak semestinya, jadi saya menghabiskan 2 jam untuk memperbaiki masalah tersebut. Di hari kedua, saya sudah membuat beberapa rencana agar mamagemen waktu saya dapat menjadi lebih efektif, dan benar di hari kedua proses pengerjaan saya sudah menyentuh angka 85%. Sementara banyak peserta yang masih kesulitan menggerakkan katakternya, saya sudah tinggal melakukan finishing di beberapa texture objek.

Di hari terakhir tidak banyak yang saya lakukan, hanya melakukan beberapa perubahan kecil pada karakter dan menambahkan detail pada texture. Setelah selesai waktu pengerjaan, saya menunggu pengumuman juara. Awalnya saya tidak yakin untuk mendapat juara, ternyata nama SMKN 1 Pasuruan masuk ke dalam nominasi 3 besar. Alhamdulillah perjuangan saya selama 4 bulan membuahkan hasil walaupun mendapat juara 3, saya tetap bangga bisa membawa nama SMK ke tingkat provinsi.”

Benar-benar suatu prestasi yang dapat mengharumkan nama SMKN 1 Pasuruan. Semoga untuk ajang LKS kedepannya SMKN 1 Pasuruan dapat mempertahankan dan meningkatkan prestasi untuk kategori yang lebih bervariasi. Selain itu, semoga siswa-siswi unggulan dapat membawa nama SMKN 1 Pasuruan ke kancah nasional.',
        ]);
        DB::table('beritas')->insert([
            'foto' => 'pppk.jpg',
            'created_at' => '2023-01-30 13:00:00',
            'judul' => 'SMKN 1 PASURUAN JADI LOKASI UJIAN PPPK',
            'deskripsi' => 'SMKN 1 Pasuruan menjadi salah satu sekolah di Kota Pasuruan  yang digunakan untuk lokasi tes Pegawai Pemerintah dengan Perjanjian Kerja (PPPK), Senin (13/9/2021)-Kamis (15/9/2021). Pihak SMKN 1 Pasuruan siap menyukseskan pelaksanaan tes PPPK.

            Dalam pelaksanaan tes PPPK ini disediakan 9-10 ruang tes dan transit. Antara lain, Lab TKJ 2, Lab TKJ 3, dan Lab BDP. Selain ruang tes, panitia pun menyiapkan 3 ruang transit bagi peserta ujian, serta "ruang hot."

            "Ruang hot” ini adalah ruang yang diperuntukkan bagi peserta tes bersuhu tubuh tinggi, namun non reaktif." jelas Pak Arif Rahman selaku panitia ujian PPPK di SMKN 1 Pasuruan.

            “Perlu diketahui pada tiap ruang transit disediakan locker untuk menyimpan tas peserta tes.” Lanjut Pak Arif.

            Tes PPPK di SMKN 1 Pasuruan ini diikuti oleh 345 peserta, baik dari formasi guru PPPK tingkat SD, SMP, SMA/SMK. Tes ini dikerjakan secara online, maka panitia menyediakan 22 komputer dan PC pada masing-masing ruang tes.

            Karena beberapa ruang kelas digunakan sebagai ruang tes PPPK, maka siswa masih melaksanakan Pembelajaran Daring seperti sebelum PTM Terbatas.

            Lapangan sekolah digunakan sebagai sarana mendata kelengkapan administrasi peserta PPPK. Di sana ada tiga posko TUK disediakan oleh panitia tes.

            “Pada bagian kesehatan, selain “ruang hot”, panitia tes menyediakan fasilitas antara lain, ruang isolasi mandiri, ambulance dari Dinkes, dan obat-obatan yang dibutuhkan.” terang Bu Uswatun Khasanah selaku panitia Pelaksana Kesehatan.

            Penyemprotan disinfektan di seluruh area tes berlangsung juga diadakan. Hal ini dimaksudkan untuk menjaga prokes yang ditentukan.

            “Penyemprotan ini dilakukan setiap jeda sesi tes dan setelah selesai tes berlangsung” ungkap Pak Agung selaku pelaksana sarpras SMKN 1 Pasuruan.

            Semoga sukses!

            ~ Jurnalis Rakhma Oktaviolina ~',
        ]);
        DB::table('beritas')->insert([
            'foto' => 'ict.jpg',
            'created_at' => '2023-01-30 13:00:00',
            'judul' => 'PAMERAN EXPO DAN EXPOSE ICT SMK JATIM 2021',
            'deskripsi' => 'Dalam Expo dan expose ICT SMK JATIM merupakan sebuah ajang unjuk keterampilan SMK dalam bidang IT (Information Technology) yang diselenggarakan pada tanggal 23 - 24 oktober 2021 di SMKN 1 Singosari Malang. Acara ini di selenggarakan dalam rangka rangkaian peringatan hari jadi Provinisi Jawa Timur Tahun 2021.

            Acara yang diselenggarakan tersebut dihadiri siswa siswi smk se-Jawa timur dengan pameran stand. Tim dari SMKN 1 Pasuruan mengusung tema yang berjudul “SKENSA DIGIMAGZ” atau SMKN 1 Pasuruan Digital Magazine.

            Salah satu karya menarik dari siswa SMKN 1 Pasuruan berupa karikatur bergambar Ibu Khofifah yang merupakan karya dari siswa – siswi jurusan multimedia. Hasil karya tersebut mendapatkan apresiasi positif secara langsung oleh Ibu Khofifah selaku Gubernur Jawa Timur.',
        ]);
        DB::table('beritas')->insert([
            'foto' => 'perpus.jpg',
            'created_at' => '2023-01-30 13:00:00',
            'judul' => 'SAMBUT LOMBA, PERPUSTAKAAN SKENSA "PERCANTIK DIRI"
            ',
            'deskripsi' => 'Perpustakaan Skensa berbenah. Dalam rangka mengikuti lomba Perpustakaan Sekolah Berbasis IT, perpustakaan Skensa lebih menggiatkan program-program yang sudah ada. Selain itu ada pula beberapa program baru yang mulai diadakan. Ruang perpustakaan mulai direnovasi cantik. Diantaranya adalah ruang digital dan ruang kepala perpustakaan. Dua ruang ini diadakan untuk menunjang kinerja tim perpustakaan dan pengguna jasa perpustakaan.

            Perpustakaan Skensa menyediakan bahan bacaan yang beragam untuk dipinjamkan. Mulai buku paket, majalah, karya ilmiah guru dan siswa, serta banyak lagi. Adapun peminjaman buku-buku tertentu bisa dipinjam secara online dengan menjadi anggota perpustakaan online.

            Perpustakaan tidak hanya menyediakan koleksi bahan bacaan sebagai pusat ilmu pengetahuan, tapi juga menjadi wadah yang berkontribusi menyejahterakan dan rekreasi. Perpustakaan Skensa menyediakan ruang baca yang nyaman dan menarik. Dilengkapi beberapa pendingin ruangan dan spot baca unik, seperti rumah pohon, obyek interior pesawat, andong, becak, dan bemo diharapkan pengunjung perpustakaan Skensa lebih menikmati berkegiatan di sini.

            Harapan ke depan, Perpustakaan Skensa semakin menjadi pionir dalam segala kreativitas civitas SMKN 1 Pasuruan. Selamat berlomba.',
        ]);
        DB::table('beritas')->insert([
            'foto' => 'quinclong.jpg',
            'created_at' => '2023-01-30 13:00:00',
            'judul' => 'SMKN1 PASURUAN PRODUKSI HANDSANITIZER “QUINCLONG”            "
            ',
            'deskripsi' => 'Pasuruan, 12 April 2020. Teaching factory (tefa) SMKN 1 Pasuruan memproduksi handsanitizer. Produk tersebut diproduksi sebagai jawaban atas tingginya kebutuhan masyarakat akan handsanitizer di tengah pandemi corona. Produk ini merupakan produk terbaru tefa SMKN 1 yang dikemas dalam botol semprot berukuran 30ml serta jeriken kecil berukuran 1l. Sama seperti produk tefa yang lain, produk ini juga menggunakan merk dagang “Quinclong”. Rencananya produk handsanitizer ini tidak hanya akan dijual di Bussiness Center SMKN 1 tetapi juga akan dibagikan gratis kepada pihak-pihak yang membutuhkan.',
        ]);
        DB::table('beritas')->insert([
            'foto' => 'corona.jpg',
            'created_at' => '2023-01-30 13:00:00',
            'judul' => 'AKSI PEDULI WARGA TERDAMPAK PANDEMI CORONA',
            'deskripsi' => 'Pasuruan, 16 April 2020. SMKN 1 Pasuruan melaksanakan aksi peduli warga terdampak pandemi corona. Aksi ini dilakukan dengan cara membagikan paket sembako, masker, dan handsanitizer kepada pihak-pihak yang membutuhkan. Paket Sembako dan masker dibagikan pada warga terdampak corona. Sedangkan handsanitizer dibagikan kepada pos-pos penanganan dan pengamanan covid 19 yang tersebar di Kota Pasuruan. Handsanitizer tersebut merupakan produk teaching factory (tefa) SMKN 1 Pasuruan yang diproduksi oleh guru dan siswa bidang keahlian kimia.',
        ]);
        DB::table('beritas')->insert([
            'foto' => 'peringatan.jpg',
            'created_at' => '2023-01-30 13:00:00',
            'judul' => 'PERINGATAN HARI GURU DI SMK NEGERI 1 PASURUAN testtt',
            'deskripsi' => 'Ada pemandangan berbeda ketika memasuki kawasan SMK Negeri 1 Pasuruan pada hari Jumat 25 November 2016. Para anggota PKS memakai seragam PKS membantu guru dan siswa menyebrangi jalan menuju gerbang sekolah. Di gerbang sekolah bapak ibu guru disambut para siswa yang menawarkan diri untuk membantu memarkirkan kendaraan mereka. Tidak hanya itu, bapak ibu guru juga mendapatkan setangkai mawar dengan kartu ucapan bertuliskan “Selamat Hari Guru” ketika memasuki loby.

            “Tahun ini kami ingin peringatan yang berbeda dibandingkan tahun sebelumnya, peringatan yang bisa memberikan kejutan bagi bapak ibu guru sebagai wujud rasa terima kasih siswa karena telah mengajar mereka,” ujar Bapak Khoirul Soleh Waka Kesiswaan.

            Pagi hari seluruh bapak ibu guru, pegawai TU, dan siswa bersama-sama mengikuti senam. Di akhir senam bapak ibu guru dikejutkan dengan penampilan teater oleh perwakilan siswa dan anggota ekskul teater yang menampilkan cerita “Guruku Matahariku”. Para anggota OSIS juga menyiapkan kejutan lain dengan memberikan karangan bunga pada beberapa guru yang mendapatkan penghargaan di beberapa kategori seperti guru paling inspiratif atau guru paling fashionable.

            Dalam sambutannya Kepala SMK Negeri 1 Pasuruan Bapak Achmad Sarkawi menyatakan bahwa ia berharap melalui peringatan ini siswa dapat lebih menghormati dan menghargai jasa bapak ibu guru yang telah mengajar mereka dengan ikhlas. Beliau menambahkan bahwa hal itu dapat ditunjukkan dengan usaha mereka untuk memperbaiki sikap agar lebih santun saat berhadapan dengan guru.

            Acara peringatan hari guru ini ditutup dengan pemotongan tumpeng yang dilakukan oleh Bapak Sarkawi dan ketua PGRI SMK Negeri 1 Pasuruan, Bapak Kukuh Santoso. Dalam kesempatan itu juga diadakan pemilihan ketua PGRI SMK Negeri 1 Pasuruan untuk kepengurusan yang baru, yang menghasilkan keputusan memilih Bapak Muklas sebagai ketua.',
        ]);
    }
}
