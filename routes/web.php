<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Livewire\Components\Login;
use App\Livewire\Components\Profile;
use App\Livewire\Components\SignIn;
use App\Livewire\Dashboard\Index;
use App\Livewire\Post\CreatePost;
use App\Livewire\Post\Index as PostIndex;
use App\Livewire\Read\ReadPost;
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
})->name('home');

Route::get('/sign-in', SignIn::class)->name('sign-in');

Route::get('/login', Login::class)->name('login')->middleware('guest');

Route::controller(UserController::class)->group(function () {
    Route::post('/sign-in', 'signIn');
    Route::post('/login', 'authLogin');
});

Route::controller(PostController::class)->group(function () {
    Route::post('/post/create', 'createPost');
});

Route::middleware('auth')->group(function () {
    Route::get('/sign-in/profile', Profile::class)->name('profile');
    Route::get('/dashboard', Index::class)->name('dashboard');
    Route::get('/post', PostIndex::class)->name('post');
    Route::get('/post/create', CreatePost::class)->name('create-post');
    Route::get('/read', ReadPost::class)->name('read');
});
