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
Route::get('/Mangas', function () {
    $all = Manga::all();
    return view('Mangas',compact('all'));
});
Route::get('/Mangas/Create', function () {
    return view('Create');
});


Route::get('/Mangas/{id}', function ($id) {
    $find = Manga::find($id);
    return view('MangaUnique',compact('find'));
});
Route::post('/Mangas/', function () {
    $validate = request()->validate([
        'manga_price' => 'integer',
        'manga_name' => 'required',
        'description' => 'required',
        'manga_link' =>  'required',

    ]);

    $m = new Manga;
    $m -> price = request('manga_price');
    $m -> name = request('manga_name');
    $m -> description = request('description');
    $m -> image = request('manga_link');
    $m -> autor = request('manga_autor');
    $m -> dateparution = request('manga_parution');
    $m -> save();

    return redirect('/Mangas/'.$m->id);
});
