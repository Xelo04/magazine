<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Categories\CategoriesController;
use App\Http\Controllers\Categories\CategoryController;

Route::get("list", [CategoriesController::class, "list"]);
Route::post("create", [CategoryController::class, "create"]);
Route::put("update/{id}", [CategoryController::class, "update"]);
Route::delete("destroy/{id}", [CategoryController::class, "destroy"]);
