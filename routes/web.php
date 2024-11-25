<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutobusController;
use App\Http\Controllers\ConductorController;
use App\Http\Controllers\PreguntaController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\PublicsController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ImageController;

Route::get('/search', [SearchController::class, 'index'])->name('search.index');
Route::post('/search/results', [SearchController::class, 'search'])->name('search.results');
Route::get('/', [PublicsController::class, 'index']);
Route::get('/Acerca-de', [PublicsController::class, 'about'])->name('about.about');
Route::get('/descargar-pdf', [PublicsController::class, 'descargarPDF'])->name('descargar.pdf');

Route::get('/welcome', function () {
    return view('welcome');});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource(name: 'conductors', controller: ConductorController::class)->middleware(['auth', 'verified']);
Route::get('/conductor/report', [ConductorController::class, 'report'])->name('conductor.report');
Route::resource(name: 'images', controller: ImageController::class)->middleware(['auth', 'verified']);


Route::resource('autobuses', AutobusController::class)->middleware(['auth', 'verified']);
Route::get('/autobus/report', [AutobusController::class, 'report'])->name('autobuses.report');


Route::resource('preguntas', PreguntaController::class)->middleware(['auth', 'verified']);


Route::resource('horarios', HorarioController::class)->middleware(['auth', 'verified']);
Route::get('/horario/report', [HorarioController::class, 'report'])->name('horario.report');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';


