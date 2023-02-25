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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    echo "Selamat Datang";
});

Route::get('/about', function () {
    $nim = "2141720261";
    $nama = "Salwa Labibah Canora";
    return view('about', [
        'nim' => $nim,
        'name' => $nama
    ]);
});

Route::get("/articles/{id}", function($id) {
    return view('articles',[
        'id' => $id
    ]);
});

