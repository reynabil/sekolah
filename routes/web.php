<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BorderController;
use App\Http\Controllers\EkskulController;
use App\Http\Controllers\ProkerController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TenagaController;
use App\Http\Controllers\KelasxiController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\PendidikController;
use App\Http\Controllers\VisimisiController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\IdentitasController;
use App\Http\Controllers\SambutanksController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin', function () {
    return view('welcome');
});


//face
Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/footer', [HomeController::class, 'footer'])->name('footer');

//slider
Route::get('/slider', [SliderController::class, 'slider'])->name('slider');
Route::get('/tampilslider/{id}', [SliderController::class, 'tampilslider'])->name('tampilslider');
Route::post('/updateslider/{id}', [SliderController::class, 'updateslider'])->name('updateslider');

//border
Route::get('/border', [BorderController::class, 'border'])->name('border');
Route::get('/tampilborder/{id}', [BorderController::class, 'tampilborder'])->name('tampilborder');
Route::post('/updateborder/{id}', [BorderController::class, 'updateborder'])->name('updateborder');



//sambutan
Route::get('/sambutanks', [SambutanksController::class, 'sambutanks'])->name('sambutanks');
Route::get('/sambutan', [SambutanksController::class, 'sambutan'])->name('sambutan');
Route::get('/tambahdatasambutanks', [SambutanksController::class, 'tambahdatasambutanks'])->name('tambahdatasambutanks');

Route::post('/insertdatasambutanks', [SambutanksController::class, 'insertdatasambutanks'])->name('insertdatasambutanks');

Route::get('/tampildatasambutanks/{id}', [SambutanksController::class, 'tampildatasambutanks'])->name('tampildatasambutanks');
Route::post('/updatedatasambutanks/{id}', [SambutanksController::class, 'updatedatasambutanks'])->name('updatedatasambutanks');

Route::get('/deletesambutanks/{id}', [SambutanksController::class, 'deletesambutanks'])->name('deletesambutanks');

//visi
Route::get('/visi', [VisimisiController::class, 'visi'])->name('visi');
Route::get('/visim', [VisimisiController::class, 'visim'])->name('visim');
Route::get('/tambahdatavisi', [VisimisiController::class, 'tambahdatavisi'])->name('tambahdatavisi');

Route::post('/insertdatavisi', [VisimisiController::class, 'insertdatavisi'])->name('insertdatavisi');

Route::get('/tampildatavisi/{id}', [VisimisiController::class, 'tampildatavisi'])->name('tampildatavisi');
Route::post('/updatedatavisi/{id}', [VisimisiController::class, 'updatedatavisi'])->name('updatedatavisi');

Route::get('/deletevisi/{id}', [VisimisiController::class, 'deletevisi'])->name('deletevisi');

//fasilitas
Route::get('/fasilitas', [FasilitasController::class, 'fasilitas'])->name('fasilitas');
Route::get('/fase', [FasilitasController::class, 'fase'])->name('fase');
Route::get('/tambahdatafasilitas', [FasilitasController::class, 'tambahdatafasilitas'])->name('tambahdatafasilitas');

Route::post('/insertdatafasilitas', [FasilitasController::class, 'insertdatafasilitas'])->name('insertdatafasilitas');

Route::get('/tampildatafasilitas/{id}', [FasilitasController::class, 'tampildatafasilitas'])->name('tampildatafasilitas');
Route::post('/updatedatafasilitas/{id}', [FasilitasController::class, 'updatedatafasilitas'])->name('updatedatafasilitas');

Route::get('/deletefasilitas/{id}', [FasilitasController::class, 'deletefasilitas'])->name('deletefasilitas');


//ekskul
Route::get('/ekskul', [EkskulController::class, 'ekskul'])->name('ekskul');
Route::get('/ekstra', [EkskulController::class, 'ekstra'])->name('ekstra');
Route::get('/detail/{id}', [EkskulController::class, 'detail'])->name('detail');
Route::get('/tambahdataekskul', [EkskulController::class, 'tambahdataekskul'])->name('tambahdataekskul');

Route::post('/insertdataekskul', [EkskulController::class, 'insertdataekskul'])->name('insertdataekskul');

Route::get('/tampildataekskul/{id}', [EkskulController::class, 'tampildataekskul'])->name('tampildataekskul');
Route::post('/updatedataekskul/{id}', [EkskulController::class, 'updatedataekskul'])->name('updatedataekskul');

Route::get('/deleteekskul/{id}', [EkskulController::class, 'deleteekskul'])->name('deleteekskul');


//peserta
Route::get('/peserta', [PesertaController::class, 'peserta'])->name('peserta');
Route::get('/tambahdatapeserta', [PesertaController::class, 'tambahdatapeserta'])->name('tambahdatapeserta');

Route::post('/insertdatapeserta', [PesertaController::class, 'insertdatapeserta'])->name('insertdatapeserta');

Route::get('/tampildatapeserta/{id}', [PesertaController::class, 'tampildatapeserta'])->name('tampildatapeserta');
Route::post('/updatedatapeserta/{id}', [PesertaController::class, 'updatedatapeserta'])->name('updatedatapeserta');

Route::get('/deletepeserta/{id}', [PesertaController::class, 'deletepeserta'])->name('deletepeserta');

//pendidik
Route::get('/pendidik', [PendidikController::class, 'pendidik'])->name('pendidik');
Route::get('/teacher', [PendidikController::class, 'teacher'])->name('teacher');
Route::get('/tambahdatapendidik', [PendidikController::class, 'tambahdatapendidik'])->name('tambahdatapendidik');

Route::post('/insertdatapendidik', [PendidikController::class, 'insertdatapendidik'])->name('insertdatapendidik');

Route::get('/tampildatapendidik/{id}', [PendidikController::class, 'tampildatapendidik'])->name('tampildatapendidik');
Route::post('/updatedatapendidik/{id}', [PendidikController::class, 'updatedatapendidik'])->name('updatedatapendidik');

Route::get('/deletependidik/{id}', [PendidikController::class, 'deletependidik'])->name('deletependidik');

//tenaga
Route::get('/tenaga', [TenagaController::class, 'tenaga'])->name('tenaga');
Route::get('/tambahdatatenaga', [TenagaController::class, 'tambahdatatenaga'])->name('tambahdatatenaga');

Route::post('/insertdatatenaga', [TenagaController::class, 'insertdatatenaga'])->name('insertdatatenaga');

Route::get('/tampildatatenaga/{id}', [TenagaController::class, 'tampildatatenaga'])->name('tampildatatenaga');
Route::post('/updatedatatenaga/{id}', [TenagaController::class, 'updatedatatenaga'])->name('updatedatatenaga');

Route::get('/deletetenaga/{id}', [TenagaController::class, 'deletetenaga'])->name('deletetenaga');

//identitas
Route::get('/identitas', [IdentitasController::class, 'identitas'])->name('identitas');
Route::get('/identity', [IdentitasController::class, 'identity'])->name('identity');

Route::get('/tampildataidentitas/{id}', [IdentitasController::class, 'tampildataidentitas'])->name('tampildataidentitas');

Route::post('/updatedataidentitas/{id}', [IdentitasController::class, 'updatedataidentitas'])->name('updatedataidentitas');


//sejarah
Route::get('/sejarah', [SejarahController::class, 'sejarah'])->name('sejarah');
Route::get('/history', [SejarahController::class, 'history'])->name('history');
Route::post('/insertdataperkembangan', [SejarahController::class, 'insertdataperkembangan'])->name('insertdataperkembangan');

Route::get('/tambahdataperkembangan', [SejarahController::class, 'tambahdataperkembangan'])->name('tambahdataperkembangan');
Route::get('/deleteperkembangan/{id}', [SejarahController::class, 'deleteperkembangan'])->name('deleteperkembangan');

Route::get('/tampildataperkembangan/{id}', [SejarahController::class, 'tampildataperkembangan'])->name('tampildataperkembangan');
Route::post('/updatedataperkembangan/{id}', [SejarahController::class, 'updatedataperkembangan'])->name('updatedataperkembangan');
Route::post('/updatedatasejarah/{id}', [SejarahController::class, 'updatedatasejarah'])->name('updatedatasejarah');
Route::get('/tampildatasejarah/{id}', [SejarahController::class, 'tampildatasejarah'])->name('tampildatasejarah');

//berita
Route::get('/berita', [BeritaController::class, 'berita'])->name('berita');
Route::get('/news', [BeritaController::class, 'news'])->name('news');

Route::get('/tambahberita', [BeritaController::class, 'tambahberita'])->name('tambahberita');
Route::get('/tampildata/{id}', [BeritaController::class, 'tampildata'])->name('tampildata');
Route::post('/insertberita', [BeritaController::class, 'insertberita'])->name('insertberita');

Route::get('/selengkapnya/{id}', [BeritaController::class, 'selengkapnya'])->name('selengkapnya');
Route::get('/deleteberita/{id}', [BeritaController::class, 'deleteberita'])->name('deleteberita');
Route::post('/updateberita/{id}', [BeritaController::class, 'updateberita'])->name('updateberita');

//proker
Route::get('/proker', [ProkerController::class, 'proker'])->name('proker');
Route::get('/tambahproker', [ProkerController::class, 'tambahproker'])->name('tambahproker');
Route::post('/insertproker', [ProkerController::class, 'insertproker'])->name('insertproker');

Route::get('/program', [ProkerController::class, 'program'])->name('program');
Route::get('/tampilproker/{id}', [ProkerController::class, 'tampilproker'])->name('tampilproker');


//bahanajarx
Route::get('/kelasxes', [KelasxController::class, 'kelasxes'])->name('kelasxes');
Route::get('/tambahdatakelasxes', [KelasxController::class, 'tambahdatakelasxes'])->name('tambahdatakelasxes');

Route::post('/insertdatakelasxes', [KelasxController::class, 'insertdatakelasxes'])->name('insertdatakelasxes');

Route::get('/tampildatakelasxes/{id}', [KelasxController::class, 'tampildatakelasxes'])->name('tampildatakelasxes');
Route::post('/updatedatakelasxes/{id}', [KelasxController::class, 'updatedatakelasxes'])->name('updatedatakelasxes');

Route::get('/deletekelasxes/{id}', [KelasxController::class, 'deletekelasxes'])->name('deletekelasxes');

//bahanajarxi
Route::get('/kelasxis', [KelasxiController::class, 'kelasxis'])->name('kelasxis');
Route::get('/tambahdatakelasxis', [KelasxiController::class, 'tambahdatakelasxis'])->name('tambahdatakelasxis');

Route::post('/insertdatakelasxis', [KelasxiController::class, 'insertdatakelasxis'])->name('insertdatakelasxis');

Route::get('/tampildatakelasxis/{id}', [KelasxiController::class, 'tampildatakelasxis'])->name('tampildatakelasxis');
Route::post('/updatedatakelasxis/{id}', [KelasxiController::class, 'updatedatakelasxis'])->name('updatedatakelasxis');

Route::get('/deletekelasxis/{id}', [KelasxiController::class, 'deletekelasxis'])->name('deletekelasxis');

//tiga
Route::get('/tigas', [TigaController::class, 'tigas'])->name('tigas');
Route::get('/tambahdatatigas', [TigaController::class, 'tambahdatatigas'])->name('tambahdatatigas');

Route::post('/insertdatatigas', [TigaController::class, 'insertdatatigas'])->name('insertdatatigas');

Route::get('/tampildatatigas/{id}', [TigaController::class, 'tampildatatigas'])->name('tampildatatigas');
Route::post('/updatedatatigas/{id}', [TigaController::class, 'updatedatatigas'])->name('updatedatatigas');

Route::get('/deletetigas/{id}', [TigaController::class, 'deletetigas'])->name('deletetigas');

//empat
Route::get('/empats', [EmpatController::class, 'empats'])->name('empats');
Route::get('/tambahdataempats', [EmpatController::class, 'tambahdataempats'])->name('tambahdataempats');

Route::post('/insertdataempats', [EmpatController::class, 'insertdataempats'])->name('insertdataempats');

Route::get('/tampildataempats/{id}', [EmpatController::class, 'tampildataempats'])->name('tampildataempats');
Route::post('/updatedataempats/{id}', [EmpatController::class, 'updatedataempats'])->name('updatedataempats');

Route::get('/deleteempats/{id}', [EmpatController::class, 'deleteempats'])->name('deleteempats');

//kegiatan
Route::get('/kegiatans', [KegiatanController::class, 'kegiatans'])->name('kegiatans');
Route::get('/tambahdatakegiatans', [KegiatanController::class, 'tambahdatakegiatans'])->name('tambahdatakegiatans');

Route::post('/insertdatakegiatans', [KegiatanController::class, 'insertdatakegiatans'])->name('insertdatakegiatans');

Route::get('/tampildatakegiatans/{id}', [KegiatanController::class, 'tampildatakegiatans'])->name('tampildatakegiatans');
Route::post('/updatedatakegiatans/{id}', [KegiatanController::class, 'updatedatakegiatans'])->name('updatedatakegiatans');

Route::get('/deletekegiatans/{id}', [KegiatanController::class, 'deletekegiatans'])->name('deletekegiatans');

//sekolah
Route::get('/sekolahs', [SekolahController::class, 'sekolahs'])->name('sekolahs');
Route::get('/tambahdatasekolahs', [SekolahController::class, 'tambahdatasekolahs'])->name('tambahdatasekolahs');

Route::post('/insertdatasekolahs', [SekolahController::class, 'insertdatasekolahs'])->name('insertdatasekolahs');

Route::get('/tampildatasekolahs/{id}', [SekolahController::class, 'tampildatasekolahs'])->name('tampildatasekolahs');
Route::post('/updatedatasekolahs/{id}', [SekolahController::class, 'updatedatasekolahs'])->name('updatedatasekolahs');

Route::get('/deletesekolahs/{id}', [SekolahController::class, 'deletesekolahs'])->name('deletesekolahs');
