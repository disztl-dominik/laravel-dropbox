<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageGalleryController;

Route::get('/', function () {
    return view('home');
});
Route::post('/posts', [ImageGalleryController::class, 'store']);
Route::get('/upload', [ImageGalleryController::class, 'upload']);
Route::get('/galleries', [ImageGalleryController::class, 'galleries']);
Route::get('/gallery/{id}', [ImageGalleryController::class, 'gallery']);
