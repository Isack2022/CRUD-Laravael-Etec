<?php

use App\Http\Controller\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class,'index'])->name('home');
