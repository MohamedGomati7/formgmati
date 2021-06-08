<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;



Route::get('/',[indexController::class , 'index']);

//button
Route::POST('/addstd',[App\Http\Controllers\indexController::class ,'addstudent'])->name('submitstd');

// Route::get('/', function () {
//     return view('welcome');
// });
