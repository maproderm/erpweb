<?php

use App\Http\Controllers\Sales\Inventory\ProductController;


Route::group(['middleware' => ['role:developer|superadmin|sales']], function () {
    //products
    Route::get('/productos',[ProductController::class,'index'])->middleware(['auth'])->name('products.mapro.index');
    Route::get('/productos/create',[ProductController::class,'create'])->middleware(['auth'])->name('products.mapro.create');
    Route::get('/products/get-maproderm-all', [ProductController::class, 'getProductsMapro'])->middleware(['auth'])->name('products.mapro.get'); // TO: INVENTARIO VISTA ALMACEN STATUS 1
    Route::resource('productos', ProductController::class)->middleware(['auth'])->names('products.mapro')->except(['destroy']);


});
