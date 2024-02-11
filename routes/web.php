<?php

use App\Http\Controllers\ChessPlayerController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
//     return view('welcome');
// });

Route::group(['prefix' => '{locale?}'], function () {
    Route::get('/', [ HomeController::class, 'index' ] )->name('home');
});



Route::middleware([])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/login', [AdminController::class, 'showLoginForm'])->name('loginForm');
    Route::post('/login', [AdminController::class, 'login'])->name('admin.login');
    Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
    Route::get('/chess-players', [ChessPlayerController::class, 'index'])->name('chess.players');
    Route::match(['get', 'post'], '/create-update-player/{id?}',[ChessPlayerController::class, 'createUpdatePlayer'])->name('create.update.player');
    Route::get('/delete-player/{id?}',[ChessPlayerController::class, 'deletePlayer'])->name('delete.player');


});

