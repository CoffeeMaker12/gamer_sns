<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ChatController;
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

Route::get('/', function () {
    return view('welcome');
    //return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(HomeController::class)->middleware(['auth'])->group(function(){
    Route::get('/', 'home')->name('home');
    Route::get('/chats', 'chats')->name('chats');
    Route::get('/blogs/home', 'blogs')->name('blogs');
    Route::get('/boards', 'boards')->name('boards');
    Route::get('/finduser', 'finduser')->name('finduser');
    Route::get('/mypage', 'mypage')->name('mypage');
});

Route::get('/chats/{user}', [ChatController::class, 'openChat'])->middleware("auth");
Route::post('/chats', [ChatController::class, 'sendMessage'])->middleware("auth");

Route::controller(BlogController::class)->middleware(['auth'])->group(function(){
    Route::get('/blogs', 'index')->name('index');
    Route::post('/blogs', 'store')->name('store');
    Route::get('/blogs/create', 'create')->name('create');
    Route::get('/blogs/{blog}', 'show')->name('show');
    Route::put('/blogs/{blog}', 'update')->name('update');
    Route::delete('/blogs/{blog}', 'delete')->name('delete');
    Route::get('/blogs/{blog}/edit', 'edit')->name('edit');
});

Route::get('/categories/{category}', [CategoryController::class,'index'])->middleware("auth");

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
