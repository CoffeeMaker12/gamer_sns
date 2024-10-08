<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ChatroomController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogCommentController;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\BoardCommentController;
use App\Http\Controllers\BoardtypeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FindUserController;
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
    return view('toppage');
    //return view('home');
})->name('toppage');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(HomeController::class)->middleware(['auth'])->group(function(){
    Route::get('/home', 'home')->name('home');
    //Route::get('/chats', 'chats')->name('chats');
    //Route::get('/blogs', 'blogs')->name('blogs');
    //Route::get('/boards', 'boards')->name('boards');
    //Route::get('/finduser', 'finduser')->name('finduser');
    //Route::get('/mypage', 'mypage')->name('mypage');
});

Route::controller(ChatroomController::class)->middleware(['auth'])->group(function(){
    Route::get('/chats', 'index')->name('chats');
    Route::post('/chats', 'store')->name('store');
    Route::get('/chats/create', 'create')->name('create');
    Route::get('/chats/{chatroom}', 'show')->name('show');
    Route::get('/chats/{chatroom}/offer', 'offer')->name('offer');
    Route::post('/chats/{chatroom}/offer', 'storeOffer')->name('storeOffer');
    Route::get('/chats/{chatroom}/accept', 'acceptSuccess')->name('acceptSuccess');
    Route::post('/chats/{chatroom}/accept', 'acceptOffer')->name('acceptOffer');
    Route::post('/chats/{chatroom}', 'sendMessage')->name('sendMessage');
});

Route::controller(BlogController::class)->middleware(['auth'])->group(function(){
    Route::get('/blogs', 'index')->name('blogs');
    Route::post('/blogs', 'store')->name('store');
    Route::get('/blogs/create', 'create')->name('create');
    Route::get('/blogs/{blog}', 'show')->name('show');
    Route::put('/blogs/{blog}', 'update')->name('update');
    Route::delete('/blogs/{blog}', 'delete')->name('delete');
    Route::get('/blogs/{blog}/edit', 'edit')->name('edit');
});

Route::controller(BlogCommentController::class)->middleware(['auth'])->group(function(){
    Route::post('/blogs/{blog}', 'store')->name('blog_comment.store');
    Route::get('/blogs/{blog}/{blogComment}', 'comment')->name('blog_comment.comment');
    Route::get('/blogs/{blog}/{blogComment}/reply', 'reply')->name('blog_comment.reply');
    Route::post('/blogs/{blog}/{blogComment}', 'upreply')->name('blog_comment.upreply');
});

Route::controller(BoardController::class)->middleware(['auth'])->group(function(){
    Route::get('/boards', 'index')->name('boards');
    Route::post('/boards', 'store')->name('store');
    Route::get('/boards/create', 'create')->name('create');
    Route::get('/boards/{board}', 'show')->name('show');
    Route::put('/boards/{board}', 'update')->name('update');
    Route::delete('/boards/{board}', 'delete')->name('delete');
    Route::get('/boards/{board}/edit', 'edit')->name('edit');
});

Route::controller(BoardCommentController::class)->middleware(['auth'])->group(function(){
    Route::post('/boards/{board}', 'store')->name('board_comment.store');
    Route::get('/boards/{board}/{boardComment}', 'comment')->name('board_comment.comment');
    Route::get('/boards/{board}/{boardComment}/reply', 'reply')->name('board_comment.reply');
    Route::post('/boards/{board}/{boardComment}', 'upreply')->name('board_comment.upreply');
});

Route::get('/boards/type/{boardtype}', [BoardtypeController::class,'index'])->middleware("auth");

Route::controller(FindUserController::class)->middleware(['auth'])->group(function(){
    Route::get('/finduser', 'index')->name("finduser");
    Route::post('/finduser/search', 'search')->name('search');
    Route::get('/finduser/{user}', 'userInfo')->name('userInfo');
});

Route::controller(CategoryController::class)->middleware(['auth'])->group(function(){
    Route::get('/categories', 'index')->name("index");
    Route::get('/categories/{category}', 'category')->name("category");
    Route::get('/categories/chat/{category}', 'chatIndex')->name("chatIndex");
    Route::get('/categories/blog/{category}', 'blogIndex')->name("blogIndex");
    Route::get('/categories/board/{category}', 'boardIndex')->name("boardIndex");
});

Route::middleware('auth')->group(function () {
    Route::get('/mypage', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/mypage', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/mypage', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
