<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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
Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/nosotros', [PageController::class, 'about'])->name('nosotros');
Route::get('/colegios', [PageController::class, 'coleges'])->name('colegios');
Route::get('/contacto', [PageController::class, 'contact'])->name('contacto');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard')->middleware('auth');

Route::prefix('admin')->group(function () {

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
