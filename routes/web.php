<?php

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

Route::get('/sites', \App\Http\Livewire\Sites::class);
Route::get('/sites/create', \App\Http\Livewire\SiteGenerator::class);
Route::get('/sites/{site}', \App\Http\Livewire\SiteGenerator::class)->name('sites.edit');

Route::get('/', function () {
    return view('welcome');
});
