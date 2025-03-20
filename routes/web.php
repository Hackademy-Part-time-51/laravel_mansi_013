<?php

use App\Http\Controllers\{BookController, AuthorController};
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});


Route::resource('books', BookController::class);
Route::resource('authors', AuthorController::class);
