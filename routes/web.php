<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ExplaoreController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controller\AdminController;

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

Route::get('/', function () {
    return view('home');
});
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/explaore', [ExplaoreController::class, 'index'])->name('explaore');
Route::get('/details', [DetailsController::class, 'index'])->name('details');
Route::get('/author', [AuthorController::class, 'index'])->name('author');
Route::get('/create', [CreateController::class, 'index'])->name('create');
// Route::get('/login', [LoginController::class, 'index'])->name('login');
// Route::get('/register', [RegisterController::class, 'index'])->name('register');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
