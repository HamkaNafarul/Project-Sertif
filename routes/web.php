<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('Arsip_Surat');});
Route::get('/Kategori_Surat', function () {return view('Kategori_Surat');});
Route::get('/Lihat_Surat', function () {return view('Lihat_Surat');});
Route::get('/Form_Unggah', function () {return view('Form_Unggah');});
Route::get('/Form_Kategori', function () {return view('Form_Kategori');});
Route::get('/about', function () {return view('about');});





