<?php

use Illuminate\Support\Facades\Route;
use viandry\andreylb3\Http\Controllers\TCategorieControlle;
use viandry\andreylb3\Http\Controllers\TClientController;
use viandry\andreylb3\Http\Controllers\TOrderController;
use viandry\andreylb3\Http\Controllers\TProductController;
use viandry\andreylb3\Http\Controllers\TSupplierController;
use viandry\andreylb3\Http\Controllers\TWarehouseController;

Route::post('/categorie/add', [TCategorieControlle::class, 'add']);
Route::post('/categorie/delete', [TCategorieControlle::class, 'delete']);
Route::post('/categorie/change', [TCategorieControlle::class, 'change']);

Route::post('/client/add', [TClientController::class, 'add']);
Route::post('/client/delete', [TClientController::class, 'delete']);
Route::post('/client/change', [TClientController::class, 'change']);

Route::post('/order/add', [TOrderController::class, 'add']);
Route::post('/order/delete', [TOrderController::class, 'delete']);
Route::post('/order/change', [TOrderController::class, 'change']);

Route::post('/product/add', [TProductController::class, 'add']);
Route::post('/product/delete', [TProductController::class, 'delete']);
Route::post('/product/change', [TProductController::class, 'change']);

Route::post('/supplier/add', [TSupplierController::class, 'add']);
Route::post('/supplier/delete', [TSupplierController::class, 'delete']);
Route::post('/supplier/change', [TSupplierController::class, 'change']);

Route::post('/warehouse/add', [TWarehouseController::class, 'add']);
Route::post('/warehouse/delete', [TWarehouseController::class, 'delete']);
Route::post('/warehouse/change', [TWarehouseController::class, 'change']);