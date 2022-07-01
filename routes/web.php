<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;

Route::get('/admin',[FormController::class,'getIndexAdmin']);

Route::get('/formAdd', [FormController::class, 'getAdd']);
Route::post('/formAdd', [FormController::class, 'postAdd']);

// ---------------------------------------------------------------------------------
Route::get('/',[HomePageController::class,'getIndexHomePage']);