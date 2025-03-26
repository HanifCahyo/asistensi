<?php

use App\Models\Periksa;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

// Dokter //

Route::get('/dokter/dashboard/', function () {
    return view('dokter.dashboard');
})->name(name: 'dokter.dashboard');
;

Route::get('/dokter/obat', function () {
    return view('dokter.obat');
})->name('dokter.obat');
;

Route::get('/dokter/periksa', function () {
    $periksas = Periksa::all();
    return view('dokter.periksa', compact('periksas'));
})->name('dokter.periksa');

// Pasien //

Route::get('/pasien/dashboard/', function () {
    return view('pasien.dashboard');
})->name(name: 'pasien.dashboard');
;

Route::get('/pasien/riwayat', function () {
    return view('pasien.riwayat');
})->name('pasien.riwayat');
;

Route::get('/pasien/periksa', function () {
    $periksas = Periksa::all();
    return view('pasien.periksa', compact('periksas'));
})->name('pasien.periksa');

// Auth //

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});



