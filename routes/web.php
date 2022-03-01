<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResepController;
use App\Http\Controllers\Auth\RegisteredUserController;

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
Route::get('/register', [RegisteredUserController::class, 'create'])
                ->middleware('guest')
                ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
                ->middleware('guest');

Route::get('/', [ResepController::class, 'index']) 
->middleware(['auth'])->name('dashboard');

Route::get('/tulis-resep', [ResepController::class, 'create']) 
->middleware(['auth'])->name('tulis');

Route::post('/resep', [ResepController::class, 'store']) 
->middleware(['auth']);

require __DIR__.'/auth.php';
