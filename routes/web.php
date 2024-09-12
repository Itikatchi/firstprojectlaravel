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
