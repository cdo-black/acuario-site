<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('site.welcome');
})->name('welcome');

Route::get('/nosotros', function () {
    return view('site.about');
})->name('nosotros');

Route::get('/colegios', function () {
    return view('site.coleges');
})->name('colegios');

Route::get('/contacto', function () {
    return view('site.contact');
})->name('contacto');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->prefix('admin')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/about', function () {
        return view('admin.about');
    })->name('about');

    Route::get('/coleges', function () {
        return view('admin.coleges');
    })->name('coleges');
    
    Route::get('/contact', function () {
        return view('admin.contact');
    })->name('contact');
});
