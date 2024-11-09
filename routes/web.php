<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/',[productController::class,'productList'])->name('product.route');
Route::get('inputProduct',[productController::class,'create'])->name('input.route');
Route::post('store',[productController::class,'store'])->name('store.route');
Route::get('edit/{id}',[productController::class,'edit'])->name('edit.route');



Route::put('update/{id}',[productController::class,'updateData'])->name('update.route');
Route::delete('delete/{id}',[productController::class,'destroy'])->name('delete.route');
