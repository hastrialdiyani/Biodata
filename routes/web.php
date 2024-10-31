<?php

use App\http\controllers\JalurController;
use App\http\controllers\BiodataController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// ini adalah route tanpa mvc
Route::get('/jalurbaru', function () {
    return 'Ini Jalur Baru Tanpa MVC';
});


// ini adalah route menggunakan view
Route::get('/jalurview', function () {
    return view('viewjalur');
});

// ini adalah route menggunakan view & controller
Route::get('/jalurcontroller', [jalurcontroller::class,'index']);


// ini adalah route menggunakan view controller & model
Route::get('/jalurmodel', [jalurcontroller::class,'MenampilkanDataModel']);


// ini adalah route menggunakan view controller & model
Route::get('/biodata', [biodatacontroller::class,'MenampilkanBiodata']);


