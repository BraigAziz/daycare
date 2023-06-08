<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('front.welcome');
});

Route::get('/about', function () {
    return view('front.about');
});
Route::get('/galerie', function () {
    return view('front.galerie');
});
Route::get('/bourassa', function () {
    return view('front.bourassa');
});
Route::get('/urbain', function () {
    return view('front.urbain');
});
Route::get('/service-de-nuit', function () {
    return view('front.service-de-nuit');
});
Route::get('/service-traiteur-frais-jour', function () {
    return view('front.service-traiteur-frais-jour');
});
Route::get('/service-fin-de-semain', function () {
    return view('front.service-fin-de-semain');
});
