<?php

use App\Http\Controllers\BE\IndexController;
use App\Http\Controllers\FE\HomeController;
use Illuminate\Support\Facades\Route;






//routes FE


Route::get("/", [HomeController::class, 'index'])->name("FE.home");


//routes BE
Route::get("/system", [IndexController::class, 'index'])->name("BE.home");
