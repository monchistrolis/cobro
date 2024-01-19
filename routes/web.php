<?php

use App\Http\Controllers\ComentarioController;
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

// Route::get('/', function () {
//     return view('general.index');
// }) ->name('index');

Route::get('mensaje', function () {
    return view('comentarioListo');
})->name('msn');

Route::get('bancario', function () {
    return view('welcome');
})->name('bancario');

Route::get('fiscalizacion', function () {
    return view('fiscalizacion');
})->name('fiscalizacion');

// Route::resource('Comentario',ComentarioController::class);

Route::post('/comentario.store' , [ComentarioController::class, 'store'])->name('comentario.store');
Route::get('/' , [ComentarioController::class, 'index'])->name('index');
