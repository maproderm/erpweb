<?php

use App\Http\Controllers\Warehouseimaq\Inventory\InventoryController;
use App\Http\Controllers\Warehouseimaq\Order\OrderController;


Route::group(['middleware' => ['role:developer|superadmin|almacenimaq']], function () {
    //products
    Route::get('/products',[InventoryController::class,'index'])->middleware(['auth'])->name('products.index');
    Route::get('/products/create',[InventoryController::class,'create'])->middleware(['auth'])->name('products.create');
    Route::post('/store',[InventoryController::class,'store'])->middleware(['auth'])->name('inventory.store');
    Route::get('/products/get-general-all', [InventoryController::class, 'getProducts'])->middleware(['auth'])->name('products.get'); // TO: INVENTARIO VISTA ALMACEN STATUS 1
    Route::get('/revisar-productos',[InventoryController::class,'revise'])->middleware(['auth'])->name('products.revise');
    Route::get('/products/get-revise-all', [InventoryController::class, 'getProductsRevision'])->middleware(['auth'])->name('productsrevision.get'); // TO: REVISION DE PRODUCTOS STATUS 0
    Route::resource('products', InventoryController::class)->middleware(['auth'])->names('products')->except(['destroy']);

    //Orders
    Route::get('/orders',[OrderController::class,'index'])->middleware(['auth'])->name('orders.index');
    Route::get('/orders/create',[OrderController::class,'create'])->middleware(['auth'])->name('orders.create');
    Route::resource('orders', OrderController::class)->middleware(['auth'])->names('orders')->except(['destroy']);

});
