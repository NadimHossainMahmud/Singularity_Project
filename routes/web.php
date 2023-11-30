<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontPageController;

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;



  
  Auth::routes();
  
  Route::get('/', [FrontPageController::class,'frontpage'] );

  Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

  Route::middleware(['auth'])->group(function () {

  Route::get('/product', [ProductController::class,'index'] )->name('products.index');

  Route::get('/products/create', [ProductController::class,'create'] );
  
  Route::post('/products/store', [ProductController::class,'store'] );
  
  Route::get('/products/{id}/edit', [ProductController::class,'edit'] );
  
  Route::put('/products/{id}/update', [ProductController::class,'update'] );
  
  Route::delete('/products/{id}/delete', [ProductController::class,'destroy'] );
  
  Route::get('/products/{id}/show', [ProductController::class,'show'] );
  
  
  
  
});




