<?php

use App\Http\Controllers\PesertaController;
use App\Http\Controllers\SuksesController;
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

Route::get('/peserta', [PesertaController::class, 'index']);
Route::get('/peserta/create', [PesertaController::class, 'create']);
Route::post('/peserta/create', [PesertaController::class, 'store']);
Route::get('/peserta/{id}/edit', [PesertaController::class, 'edit']);
Route::put('/peserta/{id}', [PesertaController::class, 'update']);
Route::get('/peserta/{id}/delete', [PesertaController::class, 'delete']);
Route::get('/peserta/cetakPesertasingle/{id}', [PesertaController::class, 'cetakPesertasingle']);

Route::get('/cetakPeserta', [PesertaController::class, 'cetakPeserta']);

Route::get('/sukses', [SuksesController::class, 'index']);