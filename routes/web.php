<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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


Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');

Route::post('/contacts', [ContactController::class,'store'])->name('contacts.store');

Route::get('/contacts/create', [ContactController::class,'create'])->name('contacts.create');

Route::get('/contacts/{id}',[ContactController::class,'show'])->name('contacts.show');

Route::put('/contacts/{id}',[ContactController::class,'update'])->name('contacts.update');

Route::delete('/contacts/{id}',[ContactController::class,'destory'])->name('contacts.destory');

Route::get('/contacts/{id}/edit',[ContactController::class,'edit'])->name('contacts.edit');


Auth::routes(['verify'=>true]);

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
