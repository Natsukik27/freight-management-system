<?php

use Illuminate\Support\Facades\Route;

// Halaman Login
Route::get('/', function () {
    return view('auth.login');
});

// Login Manual / Simulasi
Route::get('/login', fn () => view('auth.login'))->name('login');
Route::get('/login-process', fn () => redirect()->route('dashboard'))->name('login.process');

// Dashboard
Route::get('/dashboard', fn () => view('dashboard.index'))->name('dashboard');

// ✅ ROUTE ASSET CRUD

// Index (List)
Route::view('/asset', 'asset.index')->name('asset.index');

// Add
Route::get('/asset/add', function () {
    return view('asset.add');
})->name('asset.add');

Route::put('/asset/update/{id}', function ($id) {
    return redirect()->route('asset.index')->with('success', 'Asset Successfully Added');
})->name('asset.update');

// Show
Route::get('/asset/show/{id}', function ($id) {
    return view('asset.show', ['id' => $id]);
})->name('asset.show');

// Edit
Route::get('/asset/edit/{id}', function ($id) {
    return view('asset.edit', ['id' => $id]);
})->name('asset.edit');

// Delete (Dummy confirmation page atau langsung proses hapus di controller)
Route::get('/asset/delete/{id}', function ($id) {
    return view('asset.delete', ['id' => $id]);
})->name('asset.delete');
