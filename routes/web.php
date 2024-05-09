<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BbsController;

// Route::get('/', function () {
//     return view('welcome');

Route::get('/', [BbsController::class, 'index'])->name('index');
Route::get('/{bb}', [BbsController::class, 'detail'])->name('detail');
