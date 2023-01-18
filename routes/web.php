<?php

use App\Http\Livewire\Home;
use App\Http\Livewire\Movies;
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

Route::get('/', Home::class);
Route::get('/movies', Movies::class);
Route::get('/movies/{urlKey}', Movies::class);