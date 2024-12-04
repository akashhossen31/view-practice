<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoopController;
use App\Http\Controllers\AssetsController;

Route::get('/{num1}/{num2}',[HomeController::class,'Action']);
Route::get('/loop',[LoopController::class,'loop']);
Route::get('/',[AssetsController::class,'Assets']);
