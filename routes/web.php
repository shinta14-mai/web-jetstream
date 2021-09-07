<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AndalalinController;
use App\Http\Controllers\RekomteknisController;
use App\Http\Controllers\StandartekController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->resource('andalalin', AndalalinController::class);
Route::middleware(['auth:sanctum', 'verified'])->resource('rekomtek', RekomteknisController::class);
Route::middleware(['auth:sanctum', 'verified'])->resource('standartek', StandartekController::class);

Route::get('/home', [UserController::class, 'home']);
Route::get('/info', [UserController::class, 'info']);
Route::get('/search', [UserController::class, 'search']);

Route::get('/andal', [AndalalinController::class, 'index']);
Route::post('/andal', [AndalalinController::class, 'store']);
Route::get('/andal/create', [AndalalinController::class, 'create']);
Route::get('/andal/{id}', [AndalalinController::class, 'show'])->name('andal.show');
Route::put('/andal/{id}', [AndalalinController::class, 'update']);
Route::get('/andal/{id}/edit', [AndalalinController::class, 'edit']);

Route::get('/rt', [RekomteknisController::class, 'index']);
Route::post('/rt', [RekomteknisController::class, 'store']);
Route::get('/rt/create', [RekomteknisController::class, 'create']);
Route::get('/rt/{id}', [RekomteknisController::class, 'show'])->name('andal.show');
Route::put('/rt/{id}', [RekomteknisController::class, 'update']);
Route::get('/rt/{id}/edit', [RekomteknisController::class, 'edit']);

Route::get('/st', [StandartekController::class, 'index']);
Route::post('/st', [StandartekController::class, 'store']);
Route::get('/st/create', [StandartekController::class, 'create']);
Route::get('/st/{id}', [StandartekController::class, 'show'])->name('andal.show');
Route::put('/st/{id}', [StandartekController::class, 'update']);
Route::get('/st/{id}/edit', [StandartekController::class, 'edit']);
