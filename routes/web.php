<?php

use Illuminate\Support\Facades\Route;
use App\Models\Manga;

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

Route::get('/Mangas', [\App\Http\Controllers\MangaContoller::class, 'all']);

Route::get('/Mangas/Create', [\App\Http\Controllers\MangaContoller::class, 'creation']);

Route::get('/Mangas/{id}/edit', [\App\Http\Controllers\MangaContoller::class, 'edit']);

Route::get('/Mangas/{id}', [\App\Http\Controllers\MangaContoller::class, 'find']);

Route::post('/Mangas/', [\App\Http\Controllers\MangaContoller::class, 'create']);

Route::patch('/Mangas/{id}/', [\App\Http\Controllers\MangaContoller::class, 'update']);

Route::delete('/Mangas/{id}', [\App\Http\Controllers\MangaContoller::class, 'delete']);
