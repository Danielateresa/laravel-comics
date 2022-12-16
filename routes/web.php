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

Route::get('/', function () {
    $comics = config('db.comics');


    return view('comics', compact('comics'));
})->name('comics');

Route::get('/characters', function () {
    $characters = config('db.characters');

    $pageUnderConstruction = "Page under construction";
    $text = "Don't miss the biggest news reserved for you, soon on our website!";
    return view('characters', compact('pageUnderConstruction', 'text', 'characters'));
})->name('characters');