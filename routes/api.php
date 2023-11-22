<?php

use App\Http\Controllers\AchievementController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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
Route::get('achievements/{id}', [AchievementController::class, 'show']);
Route::delete('achievements/{id}', [AchievementController::class, 'destroy']);
Route::put('achievements/{id}', [AchievementController::class, 'update']);

Route::get('productsRequierement', [ProductRequierement::class, 'index']);
Route::post('productsRequierement', [ProductRequierement::class, 'store']);
Route::get('productsRequierement/{id}', [ProductRequierement::class, 'show']);
Route::delete('productsRequierement/{id}', [ProductRequierement::class, 'destroy']);
Route::put('productsRequierement/{id}', [ProductRequierement::class, 'update']);