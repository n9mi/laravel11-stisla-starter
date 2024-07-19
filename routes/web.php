<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/home');
});
Route::get('/home', function () {
    return view('home', ['type_menu' => 'dashboard']);
});
Route::get('/default', function () {
    return view('pages.default.default', ['type_menu' => 'dashboard']);
});

Route::get('/error-403', function () {
    return view('pages.errors.error-403', ['type_menu' => 'error']);
});
Route::get('/error-404', function () {
    return view('pages.errors.error-404', ['type_menu' => 'error']);
});
Route::get('/error-500', function () {
    return view('pages.errors.error-500', ['type_menu' => 'error']);
});
Route::get('/error-503', function () {
    return view('pages.errors.error-503', ['type_menu' => 'error']);
});