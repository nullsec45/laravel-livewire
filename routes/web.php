<?php

use App\Livewire\Home;
use App\Livewire\About;
use App\Livewire\Login;
use App\Livewire\Contact;
use App\Livewire\Timeline;
use App\Livewire\Users\Index as UserIndex;
use App\Livewire\Users\Show;
use App\Livewire\Posts\Index;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;

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

Route::middleware('auth')->group(function () {
    Route::get('/', Home::class)->name('home');
    Route::get('/home', Home::class)->name('home');
    Route::get('/about', About::class)->name('about');
    Route::get('/contact', Contact::class)->name('about');
    // Route::get('/posts', Index::class)->name('posts.index');
    Route::get('/timeline', Timeline::class)->name('timeline');


    Route::get('users',UserIndex::class)->name('users.index');
    Route::get('users/{user}', Show::class)->name('users.show');
    Route::post('/logout', LogoutController::class)->name('logout');
});

Route::get('/login', Login::class)->name('login')->middleware('guest');
