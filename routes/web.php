<?php

use App\Livewire\Home;
use App\Livewire\Users\Show;
use App\Livewire\Posts\Index;
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

Route::get('/', Home::class)->name('home');
Route::get('/about', Home::class)->name('about');
Route::get('/posts', Index::class)->name('posts.index');

Route::get('users/{user}',Show::class)->name('users.show');
