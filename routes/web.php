<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

Route::get('/', [ProductController::class, 'index']);

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/profil', function () {
    return "Nama: Aditya Nurkhalif Indrawan<br>Kelas: XI PPLG";
});

Route::get('/siswa/{nama}', function ($nama) {
    return "Nama siswa: " . $nama;
});

// Routes untuk Login
Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'processLogin']);
Route::get('/logout', [AuthController::class, 'logout']);

