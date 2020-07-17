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
    return view('welcome');
});

Route::get('/admin_pages/pages', function () {
    return view('admin_pages/pages/index');
})->name('acceuil');

Route::get('/admin_pages/pages/icon-material', function () {
    return view('admin_pages/pages/icon-material');
})->name('icon');

Route::get('/admin_pages/pages/table-basic', function () {
    return view('admin_pages/pages/table-basic');
})->name('table');

Route::get('/admin_pages/pages/edit', function () {
    return view('admin_pages/pages/edit');
})->name('edition');

Route::get('/admin_pages/pages-profile', function () {
    return view('admin_pages/pages/pages-profile');
})->name('profil');



Route::resource('admin_pages/pages/table-basic', 'etudiantController');
Route::resource('admin_pages/pages/edit', 'etudiantController');

Route::get('/admin_pages/pages/edit', function () {
    return view('admin_pages/pages/edit');
});

Route::get('admin_pages/pages/icon-material','EtudiantController@liste');



