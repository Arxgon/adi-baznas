<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('display-4');
});

Route::get('/display', function () {
    return view('display-4');
})->name('display');
// Route::get('/display-2', function () {
//     return view('display-2');
// });
// Route::get('/display-3', function () {
//     return view('display-3');
// });
