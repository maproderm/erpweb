<?php

use App\Http\Controllers\Sales\Sale\SaleController;
use App\Http\Controllers\Sales\Client\ClientController;
use App\Http\Controllers\Sales\Dealer\DealerController;
use App\Http\Controllers\Sales\Pedido\PedidoController;
use App\Http\Controllers\Sales\Inventory\ProductController;
use App\Http\Controllers\Sales\Config\ConfigmaproController;


Route::group(['middleware' => ['role:developer|superadmin|sales']], function () {
    //products
    Route::get('/productos',[ProductController::class,'index'])->middleware(['auth'])->name('productos.mapro.index');
    Route::get('/productos/create',[ProductController::class,'create'])->middleware(['auth'])->name('productos.mapro.create');
    Route::get('/productos/get-maproderm-all', [ProductController::class, 'getProductsMapro'])->middleware(['auth'])->name('productosmapro.get'); // TO: INVENTARIO VISTA ALMACEN STATUS 1
    Route::resource('productos', ProductController::class)->middleware(['auth'])->names('productos.mapro')->except(['destroy']);

    //Clientes
    Route::get('/clientes',[ClientController::class,'index'])->middleware(['auth'])->name('clientes.index');
    Route::get('/clientes/get-clients-all',[ClientController::class,'getClients'])->middleware(['auth'])->name('clientes.get');
    Route::resource('clientes', ClientController::class)->middleware(['auth'])->names('clientes')->except(['destroy']);

    //Distribuidores
    Route::get('/distribuidores',[DealerController::class,'index'])->middleware(['auth'])->name('dealers.index');
    Route::resource('distribuidores', DealerController::class)->middleware(['auth'])->names('dealers')->except(['destroy']);

    //Ventas
    Route::get('/ventas',[SaleController::class,'index'])->middleware(['auth'])->name('ventas.index');
    Route::get('/ventas/create',[SaleController::class,'create'])->middleware(['auth'])->name('ventas.create');
    Route::resource('ventas', SaleController::class)->middleware(['auth'])->names('ventas')->except(['destroy']);

    //Orders
    Route::get('/pedidos',[PedidoController::class,'index'])->middleware(['auth'])->name('pedidos.index');
    Route::get('/cotizaciones',[PedidoController::class,'quotation'])->middleware(['auth'])->name('pedidos.quotation');
    Route::resource('pedidos', PedidoController::class)->middleware(['auth'])->names('pedidos')->except(['destroy']);

    //Orders
    Route::get('/categorias-maproderm',[ConfigmaproController::class,'categories'])->middleware(['auth'])->name('configmapro.categories');
    Route::get('/categorias/get-maproderm-all',[ConfigmaproController::class,'getCategories'])->middleware(['auth'])->name('configmapro.categoriesall');
    Route::get('/marcas-maproderm',[ConfigmaproController::class,'brands'])->middleware(['auth'])->name('configmapro.brands');
    Route::get('/marcas/get-maproderm-all',[ConfigmaproController::class,'getBrands'])->middleware(['auth'])->name('configmapro.brandsall');
    Route::resource('configuracionesmapro', ConfigmaproController::class)->middleware(['auth'])->names('configmapro')->except(['destroy']);
});
