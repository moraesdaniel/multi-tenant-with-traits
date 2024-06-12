<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\TenantController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tenant', [TenantController::class, 'index']);
Route::post('/tenant', [TenantController::class, 'store']);
Route::get('/item', [ItemController::class, 'index']);
Route::post('/item', [ItemController::class, 'store']);
Route::get('/person', [PersonController::class, 'index']);
Route::post('/person', [PersonController::class, 'store']);
