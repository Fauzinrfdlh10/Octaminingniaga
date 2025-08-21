<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index'); // index.blade.php
});

Route::get('/about', function () {
    return view('about'); // about.blade.php
});

Route::get('/advisor-pengawas', function () {
    return view('advisor_pengawas'); // advisor_pengawas.blade.php
});

Route::get('/anggota', function () {
    return view('anggota'); // anggota.blade.php
});

Route::get('/berita', function () {
    return view('berita'); // berita.blade.php
});

Route::get('/detail', function () {
    return view('detail'); // detail.blade.php
});

Route::get('/dewan-pengawas', function () {
    return view('dewan_pengawas'); // dewan_pengawas.blade.php
});

Route::get('/galeri', function () {
    return view('galeri'); // galeri.blade.php
});

Route::get('/legal-koperasi', function () {
    return view('legal_koperasi'); // legal_koperasi.blade.php
});

Route::get('/portfolio', function () {
    return view('portfolio'); // portfolio.blade.php
});

Route::get('/service', function () {
    return view('service'); // service.blade.php
});

Route::get('/team', function () {
    return view('team'); // team.blade.php
});

Route::get('/contact', function () {
    return view('contact'); // contact.blade.php
});
