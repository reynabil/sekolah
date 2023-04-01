<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class artikel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artikels')->insert([
            'foto' => 'membaca.jpg',
            'created_at' => '2023-02-17',
            'judul' => 'Mikrolet literasi menuju pasuruan bermartabat
             dan berkemajuan',
            'deskripsi' => 'Sahabat Galaksi, pasti kalian tidak asing dengan mikrolet yang satu ini. Mikrolet ini ada lima di Kota Pasuruan, sementara masih tersedia di mikrolet D1, D2, E1, dan E2. Ciri-ciri mikrolet ini adalah memiliki stiker bertuliskan “Mikrolet Baca Kota Pasuruan” di bagian kaca belakang mikrolet. Nah, sudah ingat apa namanya?Ya, benar sekali inilah mikrolet baca Kota Pasuruan yang digagas oleh SMKN 1 Pasuruan bekerja sama dengan Dinas Kearsipan dan
            Perpustakaan Kota Pasuruan. Mikrolet ini merupakan bentuk kepedulian SMKN 1 Pasuruan terhadap kebutuhan literasi masyarakat Kota Pasuruan.  ikrolet ini telah diresmikan oleh Kepala Cabang Dinas Pendidikan Kota Pasuruan, Ibu Indah Yudiani, pada 4 Mei 2019. “Kami berupaya menambah jumlah mikrolet
            baca ini agar semakin banyak masyarakat Kota Pasuruan yang ikut merasakan manfaatnya,” ujar Drs. Akh. Sigit Suyani, S.ST., M.T., Kepala SMKN 1
            Pasuruan.“Tidak hanya itu, kami juga berencana mendirikan stand baca buku gratis di ruang-ruang publik sebagai bentuk upaya sekolah untuk turut
            aktif dalam literasi masyarakat,” .',
        ]);
        DB::table('artikels')->insert([
            'foto' => 'tefa.jpg',
            'created_at' => '2023-02-17',
            'judul' => 'mengenal lebih dekat dengan pembelajaran teaching factory di SMK ',
            'deskripsi' => 'Hai sahabat Galaksi, pasti kalian sudah tidak asing lagi dengan istilah “tefa",terutama kalian siswa kelas XI yang telah menjual produk tefa bidang keahlian kimia dengan merk “Quinclong” dalam kegiatan PKL internal. Produk-produk tersebut antara lain sabun cuci piring, deterjen cair, sabun cuci tangan,
            pembersih lantai, pembersih kaca, pengharum, dan pelembut pakaian. Akan tetapi, tahukah sahabat apa yang dimaksud dengan tefa? Teaching factory (TEFA) merupakan pengembangan dari unit produksi yakni penerapan sistem industri mitra di unit produksi yang telah ada di SMK. Unit produksi adalah pengembangan bidang usaha sekolah. Unit kerja ini berfungsi untuk menambah penghasilan sekolah yang dapat digunakan dalam upaya pemeliharaan peralatan, meningkatkan SDM, dan memberikan pengalaman kerja yang nyata pada siswa. Penerapan unit produksi memiliki landasan hukum yaitu Peraturan Pemerintah nomor 29 tahun 1990 pasal 29 ayat 2 yaitu, "Untuk mempersiapkan siswa sekolah menengah kejuruan menjadi tenaga kerja, pada
            sekolah menengah kejuruan dapat didirikan unit produksi yang beroperasi secara profesional."Pembelajaran melalui teaching factory bertujuan untuk menumbuhkembangkan karakter dan etos kerja (disiplin, tanggung jawab, jujur,kerjasama, kepemimpinan, dan lain-lain) yang dibutuhkan DU/DI serta meningkatkan kualitas hasil pembelajaran dari sekadar membekali kompetensi (competency based training) menuju ke pembelajaran yang membekali kemampuan memproduksi barang/ jasa (production based training). Hubungan kerjasama antara SMK dengan industri dalam pola pembelajaran teaching factory akan berdampak positif untuk membangun kerjasama (partnership) secara sistematis dan terencana. Penerapan pola pembelajaran ini
            menghubungkan dunia pendidikan kejuruan dengan dunia industri sehingga terjadi check and balance terhadap proses pendidikan pada SMK untuk enjaga dan memelihara keselarasan dengan kebutuhan pasar kerja. Nah, sekarang kalian tahukan dengan istilah tefa? Sahabat Galaksi, kita patut bangga dan
            menyambut dengan optimis model pembelajaran tefa yang dilaksanakan di sekolah kita. Karena melalui pembelajaran tefa, kita dapat meningkatkan oftskill dan hardskill melalui unit produksi yang beroperasi secara profesional di sekolah. ',
        ]);
        DB::table('artikels')->insert([
            'foto' => 'archery.jpg',
            'created_at' => '2023-02-17',
            'judul' => 'Skensa archery ekskul baru dengan prestasi yang patut ditiru',
            'deskripsi' => 'SMKN 1 Pasuruan membuka salah satu ekskul yang baru dibentuk pada tahun ajaran 2019-2020, yaitu ekskul panahan, Skensa Archery. Ekskul ini dibina dan dilatih langsung oleh salah satu guru olahraga SMKN1, Bapak Heru Narko, S.Pd. Ekskul ini dibentuk dengan tujuan menghidupkan kegiatan panahan di SMKN 1. Lebih dari 20 siswa menjadi anggota aktif dalam ekskul ini. Menurut Pak Heru, kegiatan panahan di SMKN 1 ini telah mendapat rekomendasi dari Pengcab PERPANI Kota Pasuruan. Meskipun terbilang baru, tetapi prestasinya tidak bisa dipandang sebelah mata. Ekskul ini pernah beberapa kali mengikuti kejuaraan memanah dan mendapatkan beberapa gelar juara. Kejuaraan yang pernah diikuti antara lain, Kejurda Kelompok Umur Tahun 2019, Jember Open Tahun 2019 (Juara 2 beregu standard bow dan juara 3 beregu barebow), Gubernur AAU Jogjakarta tahun 2019 (Juara 1 beregu standard bow putra), dan Kejuaraan Panahan PANGLIMA TNI OPEN ke-1 Tahun 2019. Skensa Archery juga pernah mewakili kontingen Kota Pasuruan untuk mengikuti Liga PORA OPUD (Olahraga Prestasi Unggulan Daerah) Jawa Timur ke-I, dengan kategori lomba recurve jarak 70 meter. “Kami terus berusaha memberikan upaya terbaik pada siswa terutama pada sarana dan prasarana yang menunjang kegiatan mereka. Alhamdulillah, pada tahun ini Skensa Archery mendapat izin memakai lapangan Wijaya untuk digunakan latihan sehingga siswa dapat berlatih dengan baik,” ujar Pak Heru. Beliau menyatakan bahwa lapangan Wijaya dipilih karena memperhatikan faktor keamanan serta karena beliau ingin agar siswa terbiasa dengan jarak standar lomba. Beliau berharap dengan upaya yang telah dilakukan ini siswa menjadi lebih semangat latihan demi meningkatkan keterampilan mereka dalam hal memanah.',
        ]);
        DB::table('artikels')->insert([
            'foto' => 'tefa.jpg',
            'created_at' => '2023-02-17',
            'judul' => 'mengenal lebih dekat dengan pembelajaran teaching factory di SMK ',
            'deskripsi' => 'Hai sahabat Galaksi, pasti kalian sudah tidak asing lagi dengan istilah “tefa",terutama kalian siswa kelas XI yang telah menjual produk tefa bidang keahlian kimia dengan merk “Quinclong” dalam kegiatan PKL internal. Produk-produk tersebut antara lain sabun cuci piring, deterjen cair, sabun cuci tangan,
            pembersih lantai, pembersih kaca, pengharum, dan pelembut pakaian. Akan tetapi, tahukah sahabat apa yang dimaksud dengan tefa? Teaching factory (TEFA) merupakan pengembangan dari unit produksi yakni penerapan sistem industri mitra di unit produksi yang telah ada di SMK. Unit produksi adalah pengembangan bidang usaha sekolah. Unit kerja ini berfungsi untuk menambah penghasilan sekolah yang dapat digunakan dalam upaya pemeliharaan peralatan, meningkatkan SDM, dan memberikan pengalaman kerja yang nyata pada siswa. Penerapan unit produksi memiliki landasan hukum yaitu Peraturan Pemerintah nomor 29 tahun 1990 pasal 29 ayat 2 yaitu, "Untuk mempersiapkan siswa sekolah menengah kejuruan menjadi tenaga kerja, pada
            sekolah menengah kejuruan dapat didirikan unit produksi yang beroperasi secara profesional."Pembelajaran melalui teaching factory bertujuan untuk menumbuhkembangkan karakter dan etos kerja (disiplin, tanggung jawab, jujur,kerjasama, kepemimpinan, dan lain-lain) yang dibutuhkan DU/DI serta meningkatkan kualitas hasil pembelajaran dari sekadar membekali kompetensi (competency based training) menuju ke pembelajaran yang membekali kemampuan memproduksi barang/ jasa (production based training). Hubungan kerjasama antara SMK dengan industri dalam pola pembelajaran teaching factory akan berdampak positif untuk membangun kerjasama (partnership) secara sistematis dan terencana. Penerapan pola pembelajaran ini
            menghubungkan dunia pendidikan kejuruan dengan dunia industri sehingga terjadi check and balance terhadap proses pendidikan pada SMK untuk enjaga dan memelihara keselarasan dengan kebutuhan pasar kerja. Nah, sekarang kalian tahukan dengan istilah tefa? Sahabat Galaksi, kita patut bangga dan
            menyambut dengan optimis model pembelajaran tefa yang dilaksanakan di sekolah kita. Karena melalui pembelajaran tefa, kita dapat meningkatkan oftskill dan hardskill melalui unit produksi yang beroperasi secara profesional di sekolah. ',
        ]);
        DB::table('artikels')->insert([
            'foto' => 'tefa.jpg',
            'created_at' => '2023-02-17',
            'judul' => 'mengenal lebih dekat dengan pembelajaran teaching factory di SMK',
            'deskripsi' => 'Hai sahabat Galaksi, pasti kalian sudah tidak asing lagi dengan istilah “tefa",terutama kalian siswa kelas XI yang telah menjual produk tefa bidang keahlian kimia dengan merk “Quinclong” dalam kegiatan PKL internal. Produk-produk tersebut antara lain sabun cuci piring, deterjen cair, sabun cuci tangan,
            pembersih lantai, pembersih kaca, pengharum, dan pelembut pakaian. Akan tetapi, tahukah sahabat apa yang dimaksud dengan tefa? Teaching factory (TEFA) merupakan pengembangan dari unit produksi yakni penerapan sistem industri mitra di unit produksi yang telah ada di SMK. Unit produksi adalah pengembangan bidang usaha sekolah. Unit kerja ini berfungsi untuk menambah penghasilan sekolah yang dapat digunakan dalam upaya pemeliharaan peralatan, meningkatkan SDM, dan memberikan pengalaman kerja yang nyata pada siswa. Penerapan unit produksi memiliki landasan hukum yaitu Peraturan Pemerintah nomor 29 tahun 1990 pasal 29 ayat 2 yaitu, "Untuk mempersiapkan siswa sekolah menengah kejuruan menjadi tenaga kerja, pada
            sekolah menengah kejuruan dapat didirikan unit produksi yang beroperasi secara profesional."Pembelajaran melalui teaching factory bertujuan untuk menumbuhkembangkan karakter dan etos kerja (disiplin, tanggung jawab, jujur,kerjasama, kepemimpinan, dan lain-lain) yang dibutuhkan DU/DI serta meningkatkan kualitas hasil pembelajaran dari sekadar membekali kompetensi (competency based training) menuju ke pembelajaran yang membekali kemampuan memproduksi barang/ jasa (production based training). Hubungan kerjasama antara SMK dengan industri dalam pola pembelajaran teaching factory akan berdampak positif untuk membangun kerjasama (partnership) secara sistematis dan terencana. Penerapan pola pembelajaran ini
            menghubungkan dunia pendidikan kejuruan dengan dunia industri sehingga terjadi check and balance terhadap proses pendidikan pada SMK untuk enjaga dan memelihara keselarasan dengan kebutuhan pasar kerja. Nah, sekarang kalian tahukan dengan istilah tefa? Sahabat Galaksi, kita patut bangga dan
            menyambut dengan optimis model pembelajaran tefa yang dilaksanakan di sekolah kita. Karena melalui pembelajaran tefa, kita dapat meningkatkan oftskill dan hardskill melalui unit produksi yang beroperasi secara profesional di sekolah. ',
        ]);
    }
}
