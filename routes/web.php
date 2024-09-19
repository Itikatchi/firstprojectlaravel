<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    $username = 'Yann';
    $motdepasse = '456';
    return view('home',compact('username','motdepasse'));
});
Route::get('/plus/{nmb1}/{nmb2}', function ($nmb1, $nmb2) {
    return view('plus',compact('nmb1','nmb2'));
});
Route::get('/Mangas', function () {
    $all = App\Models\Manga::all();
    return view('Mangas',compact('all'));
});
Route::get('/Mangas/{id}', function ($id) {
    $find = App\Models\Manga::find($id);
    return view('MangaUnique',compact('find'));
});
Route::get('/Manga/Create', function () {
    return view('Create');
});
