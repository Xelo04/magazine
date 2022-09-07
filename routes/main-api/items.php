<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Items\ItemsController;
use App\Http\Controllers\Items\ItemController;

Route::get("list", [ItemsController::class, "list"]);
Route::post("create", [ItemController::class, "create"]);
Route::put("update/{id}", [ItemController::class, "update"]);
Route::delete("destroy/{id}", [ItemController::class, "destroy"]);
