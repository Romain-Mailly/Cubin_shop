<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;



Route::get('/', [PostController::class, 'index'])->name('index');
Route::get('/products', [PostController::class, 'getpros'])->name('getpros');
Route::get('/contact', [PostController::class, 'contact'])->name('contact');
Route::get('/create', [PostController::class, 'create'])->name('create');
Route::post('/create', [PostController::class, 'store'])->name('create.store');
Route::get('/products/{id}', [PostController::class, 'getid'])->name('getid')->whereNumber('id');
Route::get('/modif/{id}', [PostController::class, 'modif'])->name('modif')->whereNumber('id');
Route::post('/modif/{id}', [PostController::class, 'storeUp'])->name('update.store')->whereNumber('id');
Route::get('/delete/{id}', [PostController::class, 'delete'])->name('delete')->whereNumber('id');
Route::post('/delet/{id}', [PostController::class, 'storeDel'])->name('delete.store')->whereNumber('id');
