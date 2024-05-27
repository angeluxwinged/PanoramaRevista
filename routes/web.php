<?php

use App\Http\Controllers\PanoramaController;
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
// actual
Route::get('/', [PanoramaController::class, 'panoramaActual'])->name('actual');

//vistas
Route::prefix('panorama')->group(function () {
    // Route::get('/actual', [PanoramaController::class, 'panoramaActual'])->name('actual');
    Route::get('/archivo', [PanoramaController::class, 'archivo'])->name('archivo');
    Route::post('/guardar-pais', [PanoramaController::class, 'guardarPais'])->name('guardar.pais');
    Route::get('/consejo-editorial', [PanoramaController::class, 'consejoEditorial'])->name('consejo');
    Route::get('/colaboradores', [PanoramaController::class, 'colaboradores'])->name('colaboradores');
    Route::get('/estadisticas', [PanoramaController::class, 'estadisticas'])->name('estadisticas');
});


