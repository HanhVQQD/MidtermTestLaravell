<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;

Route::get('/admin',[FormController::class,'getIndexAdmin']);

Route::get('/formAdd', [FormController::class, 'getAdd']);
Route::post('/formAdd', [FormController::class, 'postAdd']);

// ---------------------------------------------------------------------------------
Route::get('/',[HomePageController::class,'getIndexHomePage']);

Route::get('/type/{id}', [ HomePageController::class, 'getProduct_type' ]);	

Route::get('/productDetail/{id}', [ HomePageController::class, 'getDetail_product' ]);	
