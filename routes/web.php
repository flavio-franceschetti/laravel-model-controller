<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'index'])->name('movies');
Route::get('/bestMovies', [PageController::class, 'bestMoviesFilter'])->name('bestMovies');
Route::get('/movieDetails/{id}', [PageController::class, 'show'])->name('movieDetails');
