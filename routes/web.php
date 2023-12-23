<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('layouts.main');
});

Route::get('/ideas', function () {
    return view('pages.home',[
        'title' => 'ideas'
    ]);
});

Route::get('/work', function () {
    return view('pages.home',[
        'title' => 'work'
    ]);
});

Route::get('/services', function () {
    return view('pages.home',[
        'title' => 'services'
    ]);
});

Route::get('/careers', function () {
    return view('pages.home',[
        'title' => 'careers'
    ]);
});

Route::get('/about', function () {
    return view('pages.home',[
        'title' => 'about'
    ]);
});

Route::get('/contact', function () {
    return view('pages.home',[
        'title' => 'contact'
    ]);
});