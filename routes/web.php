<?php

use  App\Http\Controllers\HomeController; 
use  App\Http\Controllers\ProductController; 
use Illuminate\Support\Facades\Route;


Route::get(uri:'/', action:[HomeController::class,'index'])->name(name:'home');

Route::get(uri:'/products',action:[ProductController::class, 'index'])->name(name:'products.index');
Route::get(uri:'/products/create',action:[ProductController::class, 'create'])->name(name:'products.create');
Route::post(uri:'/products',action:[ProductController::class, 'store'])->name(name:'products.store');
Route::get(uri:'/products/{product}',action:[ProductController::class,'show'])->name(name:'products.show');
Route::get(uri:'/products/{product}/edit',action:[ProductController::class, 'edit'])->name(name:'products.edit');
Route::put(uri:'/products/{product}',action:[ProductController::class, 'update'])->name(name:'products.update');
Route::get(uri:'/products/{product}',action:[ProductController::class, 'destroy'])->name(name:'products.destroy');



