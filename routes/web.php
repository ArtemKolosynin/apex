<?php
Auth::routes();
Route::get('', [App\Http\Controllers\HomeController::class, 'start'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
