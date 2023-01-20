<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TigaController;
use App\Http\Controllers\EmpatController;
use App\Http\Controllers\KelasxController;
use App\Http\Controllers\TenagaController;
use App\Http\Controllers\KelasxiController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PendidikController;
use App\Http\Controllers\VisimisiController;
use App\Http\Controllers\FasilitasController;
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

Route::get('/', function () {
    return view('welcome');
});

//sambutan
Route::get('/sambutanks', [SambutanksController::class, 'sambutanks'])->name('sambutanks');
Route::get('/tambahdatasambutanks', [SambutanksController::class, 'tambahdatasambutanks'])->name('tambahdatasambutanks');

Route::post('/insertdatasambutanks', [SambutanksController::class, 'insertdatasambutanks'])->name('insertdatasambutanks');

Route::get('/tampildatasambutanks/{id}', [SambutanksController::class, 'tampildatasambutanks'])->name('tampildatasambutanks');
Route::post('/updatedatasambutanks/{id}', [SambutanksController::class, 'updatedatasambutanks'])->name('updatedatasambutanks');

Route::get('/deletesambutanks/{id}', [SambutanksController::class, 'deletesambutanks'])->name('deletesambutanks');

//visi
Route::get('/visi', [VisimisiController::class, 'visi'])->name('visi');
Route::get('/tambahdatavisi', [VisimisiController::class, 'tambahdatavisi'])->name('tambahdatavisi');

Route::post('/insertdatavisi', [VisimisiController::class, 'insertdatavisi'])->name('insertdatavisi');

Route::get('/tampildatavisi/{id}', [VisimisiController::class, 'tampildatavisi'])->name('tampildatavisi');
Route::post('/updatedatavisi/{id}', [VisimisiController::class, 'updatedatavisi'])->name('updatedatavisi');

Route::get('/deletevisi/{id}', [VisimisiController::class, 'deletevisi'])->name('deletevisi');

//fasilitas
Route::get('/fasilitas', [FasilitasController::class, 'fasilitas'])->name('fasilitas');
Route::get('/tambahdatafasilitas', [FasilitasController::class, 'tambahdatafasilitas'])->name('tambahdatafasilitas');

Route::post('/insertdatafasilitas', [FasilitasController::class, 'insertdatafasilitas'])->name('insertdatafasilitas');

Route::get('/tampildatafasilitas/{id}', [FasilitasController::class, 'tampildatafasilitas'])->name('tampildatafasilitas');
Route::post('/updatedatafasilitas/{id}', [FasilitasController::class, 'updatedatafasilitas'])->name('updatedatafasilitas');

Route::get('/deletefasilitas/{id}', [FasilitasController::class, 'deletefasilitas'])->name('deletefasilitas');


//peserta
Route::get('/pesertas', [PesertaController::class, 'pesertas'])->name('pesertas');
Route::get('/tambahdatapesertas', [PesertaController::class, 'tambahdatapesertas'])->name('tambahdatapesertas');

Route::post('/insertdatapesertas', [PesertaController::class, 'insertdatapesertas'])->name('insertdatapesertas');

Route::get('/tampildatapesertas/{id}', [PesertaController::class, 'tampildatapesertas'])->name('tampildatapesertas');
Route::post('/updatedatapesertas/{id}', [PesertaController::class, 'updatedatapesertas'])->name('updatedatapesertas');

Route::get('/deletepesertas/{id}', [PesertaController::class, 'deletepesertas'])->name('deletepesertas');

//pendidik
Route::get('/pendidiks', [PendidikController::class, 'pendidiks'])->name('pendidiks');
Route::get('/tambahdatapendidiks', [PendidikController::class, 'tambahdatapendidiks'])->name('tambahdatapendidiks');

Route::post('/insertdatapendidiks', [PendidikController::class, 'insertdatapendidiks'])->name('insertdatapendidiks');

Route::get('/tampildatapendidiks/{id}', [PendidikController::class, 'tampildatapendidiks'])->name('tampildatapendidiks');
Route::post('/updatedatapendidiks/{id}', [PendidikController::class, 'updatedatapendidiks'])->name('updatedatapendidiks');

Route::get('/deletependidiks/{id}', [PendidikController::class, 'deletependidiks'])->name('deletependidiks');

//tenaga
Route::get('/tenagas', [TenagaController::class, 'tenagas'])->name('tenagas');
Route::get('/tambahdatatenagas', [TenagaController::class, 'tambahdatatenagas'])->name('tambahdatatenagas');

Route::post('/insertdatatenagas', [TenagaController::class, 'insertdatatenagas'])->name('insertdatatenagas');

Route::get('/tampildatatenagas/{id}', [TenagaController::class, 'tampildatatenagas'])->name('tampildatatenagas');
Route::post('/updatedatatenagas/{id}', [TenagaController::class, 'updatedatatenagas'])->name('updatedatatenagas');

Route::get('/deletetenagas/{id}', [TenagaController::class, 'deletetenagas'])->name('deletetenagas');

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