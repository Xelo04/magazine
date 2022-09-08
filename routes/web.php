<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/{any}', function () {
    return view('welcome');
})->where("any", ".*")->middleware("auth:sanctum");
