<?php

use App\Http\Controllers\Warehousemapro\Order\OrderController;
use App\Http\Controllers\Warehousemapro\Inventory\ProductsController;


Route::group(['middleware' => ['role:developer|superadmin|almacenmapro']], function () {
    //products
    Route::get('/productos-maproderm',[ProductsController::class,'index'])->middleware(['auth'])->name('productosmapro.index');
    Route::get('/productos-maproderm/create',[ProductsController::class,'create'])->middleware(['auth'])->name('productosmapro.create');
    Route::post('/store',[ProductsController::class,'store'])->middleware(['auth'])->name('productosmapro.store');
    Route::get('/productos-maproderm/get-all', [ProductsController::class, 'getProducts'])->middleware(['auth'])->name('productosmapro.get'); // TO: INVENTARIO VISTA ALMACEN STATUS 1
    Route::resource('productos-maproderm', ProductsController::class)->middleware(['auth'])->names('productosmapro')->except(['destroy']);

    //Orders
    Route::get('/pedidos-maproderm',[OrderController::class,'index'])->middleware(['auth'])->name('ordersmapro.index');
    Route::get('/pedidos-completados',[OrderController::class,'orderscompleted'])->middleware(['auth'])->name('ordersmapro.completed');
    Route::get('/pedidos-maproderm/create',[OrderController::class,'create'])->middleware(['auth'])->name('ordersmapro.create');
    Route::resource('pedidos-maproderm', OrderController::class)->middleware(['auth'])->names('ordersmapro')->except(['destroy']);

    //Entradas y Salidas
    Route::get('/entradas-productos-maproderm',[EntradasController::class,'entradas'])->middleware(['auth'])->name('entraysaleproducts.index');
    Route::get('/salidas-productos-maproderm',[EntradasController::class,'salidas'])->middleware(['auth'])->name('entraysaleproducts.index');
    Route::resource('entradas-productos-maproderm', EntradasController::class)->middleware(['auth'])->names('entraysaleproducts')->except(['destroy']);

});
