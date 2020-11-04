<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TweetController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\FollowsController;
use App\Http\Controllers\ExploreController;

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/tweets', [TweetController::class, 'index'])->name('home');
    Route::post('/tweets', [TweetController::class, 'store']);

    Route::get('/explore', [ExploreController::class, 'index']);

    Route::post('/profiles/{user:username}/follow', [FollowsController::class, 'store'])->name('follow');
    Route::get('/profiles/{user:username}/edit', [ProfilesController::class, 'edit'])
        ->middleware('can:edit,user');

    Route::patch('/profiles/{user:username}', [ProfilesController::class, 'update'])
        ->middleware('can:edit,user');
});

Route::get('/profiles/{user:username}', [ProfilesController::class, 'show'])->name('profile');

Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');
