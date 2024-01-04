<?php

use App\Http\Controllers\MarkerController;
use App\Http\Controllers\ProductMarkerController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\AvaliationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductAssetController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductRequierementController;
use Illuminate\Support\Facades\Route;

Route::get('products', [ProductController::class, 'index']);
Route::post('products', [ProductController::class, 'store']);
Route::get('products/{id}', [ProductController::class, 'show']);
Route::delete('products/{id}', [ProductController::class, 'destroy']);
Route::put('products/{id}', [ProductController::class, 'update']);

Route::get('categories', [CategoryController::class, 'index']);
Route::post('categories', [CategoryController::class, 'store']);
Route::get('categories/{id}', [CategoryController::class, 'show']);
Route::delete('categories/{id}', [CategoryController::class, 'destroy']);
Route::put('categories/{id}', [CategoryController::class, 'update']);

Route::get('achievements', [AchievementController::class, 'index']);
Route::post('achievements', [AchievementController::class, 'store']);
Route::delete('achievements/{id}', [AchievementController::class, 'destroy']);
Route::put('achievements/{id}', [AchievementController::class, 'update']);

Route::get('products_requierements', [ProductRequierementController::class, 'index']);
Route::post('products_requierements', [ProductRequierementController::class, 'store']);
Route::delete('products_requierements/{id}', [ProductRequierementController::class, 'destroy']);
Route::put('products_requierements/{id}', [ProductRequierementController::class, 'update']);

Route::get('markers', [MarkerController::class, 'index']);
Route::post('markers', [MarkerController::class, 'store']);
Route::delete('markers/{id}', [MarkerController::class, 'destroy']);

Route::get('product_markers/{product_id}', [ProductMarkerController::class, 'index']);
Route::post('product_markers', [ProductMarkerController::class, 'store']);
Route::delete('product_markers/{product_id}/{marker_id}', [ProductMarkerController::class, 'destroy']);

Route::get('products_assets', [ProductAssetController::class, 'index']);
Route::post('products_assets', [ProductAssetController::class, 'store']);
Route::get('products_assets/{id}', [ProductAssetController::class, 'show']);
Route::delete('products_assets/{id}', [ProductAssetController::class, 'destroy']);
Route::put('products_assets/{id}', [ProductAssetController::class, 'update']);

Route::get('avaliations/{product_id}', [AvaliationController::class, 'index']);
Route::post('avaliations', [AvaliationController::class, 'store']);
Route::delete('avaliations/{id}', [AvaliationController::class, 'destroy']);
Route::put('avaliations/{id}', [AvaliationController::class, 'update']);
