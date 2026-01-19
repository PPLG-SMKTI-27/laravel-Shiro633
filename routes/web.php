<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/profil', function () {
    return "Nama: Aditya Nurkhalif Indrawan<br>Kelas: XI PPLG";
});

Route::get('/siswa/{nama}', function ($nama) {
    return "Nama siswa: " . $nama;
});

Route::get('/product', [ProductController::class, 'index']);