<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Students;

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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user', [App\Http\Controllers\HomeController::class, 'user'])->name('user');
Route::get('/hacker', [App\Http\Controllers\HomeController::class, 'hacker'])->name('hacker');
Route::get('/students', Students::class);
Route::get('/studentsm', Students::class);
Route::get('/studentsms', Students::class);