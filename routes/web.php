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
    return view('index');
});
Route::get('/recaptcha', function () {
    return view('recaptcha');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/signup', [App\Http\Controllers\UserController::class, 'signup'])->name('signup');
Route::post('/save', [App\Http\Controllers\UserController::class, 'save'])->name('save');
Route::get('/login', [App\Http\Controllers\UserController::class, 'login'])->name('login');
Route::post('/signin', [App\Http\Controllers\UserController::class, 'signin'])->name('signin');
Route::get('/admindashboard', [App\Http\Controllers\AdminController::class, 'admindashboard']);
Route::get('/addemployee', [App\Http\Controllers\AdminController::class, 'addemployee'])->name('addemployee');
Route::get('/addstudent', [App\Http\Controllers\AdminController::class, 'addstudent'])->name('addstudent');
Route::post('/createemployee', [App\Http\Controllers\AdminController::class, 'createemployee'])->name('createemployee');
Route::get('/listofemployee', [App\Http\Controllers\AdminController::class, 'listofemployee'])->name('listofemployee');
Route::get('/listofstudent', [App\Http\Controllers\AdminController::class, 'listofstudent'])->name('listofstudent');
Route::post('/updateemployee', [App\Http\Controllers\AdminController::class, 'updateemployee'])->name('updateemployee');