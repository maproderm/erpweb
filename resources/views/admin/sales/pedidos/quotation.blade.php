@extends('administrator.index')
@section('title','Distribuidores | MaProDerm')
@section('content')
<section class="content">
        <div class="container-fluid">

            <!-- Small boxes (Stat box) -->
    <div class="card">
        <div class="card-header border-0 pt-7 bg-info">
            <h2 class="text-white center">Nueva Compra</h2>
        </div>
        <div class="card-body">
            <form id="frmCompra">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="codigo">
                            <i class="fas fa-barcode"></i>
                            Buscar Producto</label>
                        <input type="hidden" id="id" name="id">
                        <input id="codigo" class="form-control ui-autocomplete-input" type="text" name="codigo" placeholder="Código o nombre del producto" autocomplete="off">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nombre">Descripción</label>
                        <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Descripción del productos" disabled="">
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <label for="cantidad">Cant</label>
                        <input id="cantidad" class="form-control" type="number" name="cantidad" onkeyup="calcularPrecio(event)" placeholder="Cant" disabled="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input id="precio" class="form-control" type="text" name="precio" placeholder="Precio compra" disabled="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="sub_total">Sub Total</label>
                        <input id="sub_total" class="form-control" type="text" name="sub_total" placeholder="Sub total" disabled="">
                    </div>
                </div>

            </div>
            </form>
        </div>
    </div>
    <br>
    <div class="card card-custom">
        {{-- <table xid="kt_datatable_horizontal_scroll" class="table align-middle table-striped table-row-bordered gy-3 gs-7 ajax_datatable"> --}}
        <table class="table align-middle xtable-striped table-row-bordered gy-3 gs-7 table-hover" id="t_com" style="width: 100%;">
            <thead class="bg-dark text-white text-bold fw-bolder">
                <tr class="text-start text-white fw-bolder fs-7 text-uppercase gs-0">
                    <th>SKU</th>
                    <th>Descripción</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Sub Total</th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="tblDetalle">
                <tr>
                    <td>105</td>
                    <td>Lip Gloss</td>
                    <td>2</td>
                    <td>100.00</td>
                    <td>200.00</td>
                    <td>
                        <button class="btn btn-danger" type="button" onclick="deleteDetalle(105)">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>106</td>
                    <td>Barra</td>
                    <td>5</td>
                    <td>100.00</td>
                    <td>500.00</td>
                    <td>
                        <button class="btn btn-danger" type="button" onclick="deleteDetalle(105)">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>106</td>
                    <td>Barra</td>
                    <td>5</td>
                    <td>100.00</td>
                    <td>500.00</td>
                    <td>
                        <button class="btn btn-danger" type="button" onclick="deleteDetalle(105)">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </td>
                </tr>
         </tbody>
        </table>
    </div>
    <br>
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="ruc">
                    <i class="fas fa-users"></i>
                Buscar Proveedor</label>
                <input type="hidden" id="id_pr" name="id_pr" value="1">
                <input id="ruc" class="form-control ui-autocomplete-input" type="text" name="ruc" placeholder="Nombre del proveedor" autocomplete="off">
            </div>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <label for="nombre_pr">Nombre</label>
                <input id="nombre_pr" class="form-control" type="text" name="nombre_pr" placeholder="Nombre" disabled="">
            </div>
        </div>
        <div class="col-md-4 ml-auto">
            <div class="form-group">
                <label for="total" class="font-weight-bold">Total a Pagar</label>
                <input id="total" class="form-control" type="text" name="total" placeholder="Total" disabled="">
                <button class="btn btn-primary mt-2 btn-block" type="button" onclick="generarCompra()">Generar Compra</button>
            </div>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>
@endsection
