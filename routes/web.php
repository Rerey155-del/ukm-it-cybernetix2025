<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/admin/anggota', function () {
    return view('admin.anggota');
});
Route::get('/admin/absen', function () {
    return view ('admin.absen');
});
    