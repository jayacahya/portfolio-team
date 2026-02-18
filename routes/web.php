<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'nama' => 'Nama Anda',
        'profesi' => 'Web Developer',
        'deskripsi' => 'Deskripsi singkat tentang Anda',
        'featuredProjects' => [] // Isi dengan array proyek dari database
    ]);
})->name('home');
