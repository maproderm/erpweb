@extends('administrator.index')
@section('title','Nuevo Producto | IMAQ')
@section('content')
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
<div class="d-flex flex-column-fluid">
    <div class=" container ">
        <div class="card card-custom gutter-b">
            <form action="https://demo.ery.mx/api/transference/save" class="form" id="form-new_document" method="POST">
                <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                        <label class="required">Número de pedido</label>
                        <input type="text" class="form-control" id="quantity" value="IMAQ-12">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                        <label class="required">Prioridad</label>
                            <div xclass="dropdown bootstrap-select form-control">
                                <select class="form-select" data-control="select2" data-live-search="true" name="priority_id" required="" title="Seleccionar..." id="priority_id" data-search="true" tabindex="-98"><option class="bs-title-option" value=""></option>
                                    <option value="1">Mínima</option>
                                    <option value="2">Baja</option>
                                    <option value="3" selected="">Normal</option>
                                    <option value="4">Alta</option>
                                    <option value="5">Crítica</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="fw-bold text-info">
                <input type="hidden" id="_upc" value="price">
                <input type="hidden" name="subtotal" value="4683" readonly="true">
                <input type="hidden" name="taxes" value="749.28" readonly="true">
                <input type="hidden" name="transfer_iva" value="749.28" readonly="true">
                <input type="hidden" name="transfer_ieps" value="0" readonly="true">
                <input type="hidden" name="retain_iva" value="0" readonly="true">
                <input type="hidden" name="retain_ieps" value="0" readonly="true">
                <input type="hidden" name="retain_isr" value="0" readonly="true">
                <input type="hidden" name="total" value="5432.280000000001" readonly="true">
                <input type="hidden" name="discount" value="0" readonly="true">

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group ">
                        <label class="form-label">SKU</label>
                        <input type="number" class="form-control" name="stock_inventory" value="" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group ">
                        <label class="form-label">Producto</label>
                            <div class="input-group flex-nowrap">
                                <div class="overflow-hidden flex-grow-1">
                                    <select name="category_id" class="form-select rounded-start-0" data-control="select2" data-placeholder="Selecciona una opción" required>
                                        <option></option>
                                        <option value="1" data-abbr="pza.">Envase 1</option>
                                        <option value="2" data-abbr="">Envase 2</option>
                                        <option value="3" data-abbr="serv.">Envase 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group ">
                            <label class="form-label">Cantidad</label>
                            <input type="number" class="form-control" id="quantity">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group text-center">
                        <label class="form-label">Agregar</label>
                        <button type="button" class="btn btn-icon btn-light-success btn-sm mr-2" id="btn-add-product">
                        <i class="bi bi-plus-lg"></i>
                        </button>
                        </div>
                    </div>
                </div>

                <hr class="fw-bold text-primary">

                <div class="table-responsive-lg">
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col" class="text-start text-dark fw-bolder fs-7 text-uppercase gs-0">#</th>
                        <th scope="col" class="text-start text-dark fw-bolder fs-7 text-uppercase gs-0">SKU</th>
                        <th scope="col" class="text-start text-dark fw-bolder fs-7 text-uppercase gs-0">Producto</th>
                        <th scope="col" class="text-start text-dark fw-bolder fs-7 text-uppercase gs-0">Cantidad</th>
                        <th scope="col" class="text-start text-dark fw-bolder fs-7 text-uppercase gs-0">Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="items-list">
                        <tr id="product-5">
                                <th scope="row">1</th>
                                <td> 654 </td>
                                <td class="text-left"> Envase Ácido Hialurónico  </td>
                                <td> 100 <button type="button" class="btn btn-icon btn-light-info btn-xs mr-2 change-alias" data-id="1662480388604"><i class="bi bi-pencil"></i></button></td>
                                <td><button type="button" class="btn btn-icon btn-light-danger btn-xs mr-2 remove-tr" data-id="1662480388604"><i class="bi bi-x fs-2x"></i></button> </td>
                        </tr>
                        <tr id="product-7">
                                <th scope="row">2</th>
                                <td> 985 </td>
                                <td class="text-left"> Envase Aloe Vera  </td>
                                <td> 150 <button type="button" class="btn btn-icon btn-light-info btn-xs mr-2 change-alias" data-id="1662480412235"><i class="bi bi-pencil"></i></button></td>
                                <td><button type="button" class="btn btn-icon btn-light-danger btn-xs mr-2 remove-tr" data-id="1662480412235"><i class="bi bi-x fs-2x"></i></button> </td>
                        </tr>
                    </tbody>
                        <tfoot>
                            <tr>
                                <th scope="row" class="text-right" colspan="3">Total</th>
                                <td colspan="3" id="subtotal">250 piezas</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                </div>
                <div class="card-footer">
                <div class="row">
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-info mr-2">
                        <i class="bi bi-check-circle fs-2x"></i>
                        <i class="flaticon2-check-mark"></i> Solicitar pedido
                    </button>
                </div>
                </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
