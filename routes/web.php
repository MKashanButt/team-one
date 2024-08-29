<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('home');

Route::view('/music', 'music')->name('music');
Route::view('/artist/marc-dub', 'artist.marc-dub')->name('music.artist');
Route::view('/artist/millticket-flashy', 'artist.millticket-flashy')->name('music.artist');
Route::view('/artist/vvsknucky-johnson', 'artist.vvsknucky-johnson')->name('music.artist');

Route::view('/news', 'news')->name('news');
Route::view('/discover', 'discover')->name('discover');
Route::view('/about-us', 'about-us')->name('about-us');
Route::view('/partners', 'partners')->name('partners');
