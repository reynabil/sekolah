<?php

use App\Http\Controllers\SambutanksController;
use Illuminate\Support\Facades\Route;

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
