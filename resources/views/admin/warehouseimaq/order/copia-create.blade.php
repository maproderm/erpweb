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
                        <label class="required">CC</label>
                        <div class="dropdown bootstrap-select form-control">
                            <select class="form-control selectpicker" data-live-search="true" name="to_warehouse_id" required="" title="Seleccionar..." id="to_warehouse_id" data-search="true" tabindex="-98">
                                <option class="bs-title-option" value=""></option>
                            </select>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                        <label class="required">Prioridad</label>
                            <div class="dropdown bootstrap-select form-control">
                                <select class="form-control selectpicker" data-live-search="true" name="priority_id" required="" title="Seleccionar..." id="priority_id" data-search="true" tabindex="-98"><option class="bs-title-option" value=""></option>
                                    <option value="1">Mínima</option>
                                    <option value="2">Baja</option>
                                    <option value="3" selected="">Normal</option>
                                    <option value="4">Alta</option>
                                    <option value="5">Crítica</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group ">
                        <label>Moneda</label>
                            <div class="dropdown bootstrap-select form-control">
                                <select class="form-control selectpicker" data-live-search="true" id="currency_id" name="currency_id" title="Seleccionar..." tabindex="-98"><option class="bs-title-option" value=""></option>
                                    <option value="3">Dolar Canadiense</option>
                                    <option value="2">Dolar americano</option>
                                    <option value="1" selected="">Peso Mexicano</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                        <label for="project_id" class="required">Proyecto</label>
                            <div class="dropdown bootstrap-select form-control">
                                <select class="form-control selectpicker" data-live-search="true" id="project_id" name="project_id" title="Seleccionar..." tabindex="-98"><option class="bs-title-option" value=""></option>
                                    <option value="1" data-client="2">1000</option>
                                    <option value="2" data-client="2">2000</option>
                                    <option value="3" data-client="3">3000</option>
                                    <option value="4" data-client="7">4000</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
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
                        <label class="form-label">Producto</label>
                            <div class="input-group">
                                <div class="input-group-prepend" data-toggle="modal" data-target="#modalProduct">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="la la-plus kt-font-brand"></i>
                                    </span>
                                </div>
                                <div class="dropdown bootstrap-select form-control dropup">
                                    <select class="form-control selectpicker" data-live-search="true" id="product_id" title="Seleccionar..." data-url="https://demo.ery.mx/api/product/data" tabindex="-98"><option class="bs-title-option" value=""></option>
                                        <option value="2" data-code="PROD000002" data-subtext="499">Certificado SSL por un año</option>
                                        <option value="1" data-code="PROD000001" data-subtext="149">Pagina Web</option>
                                        <option value="6" data-code="PROD000006" data-subtext="5015">Sillas de oficina</option>
                                        <option value="3" data-code="PROD000003" data-subtext="500">Consultorí­a en Sistemas</option>
                                        <option value="4" data-code="PROD000004" data-subtext="450">Dominio por un año</option>
                                        <option value="5" data-code="PROD000005" data-subtext="603">Escritorios de oficina</option>
                                        <option value="7" data-code="PROD000007" data-subtext="500">Sujeta Libros</option>
                                        <option value="8" data-code="PROD000008" data-subtext="500">Tarjetas de presentación (100 piezas)</option>
                                        <option value="9" data-code="PROD000009" data-subtext="4000">Kit de limpieza de pantalla profesional</option>
                                        <option value="10" data-code="PROD000010" data-subtext="500">Kit Duracell con Cargador y 4 Baterías recargables AA.</option>
                                        </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-2">
                        <div class="form-group">
                        <label class="form-label">Unidad</label>
                        <div class="dropdown bootstrap-select form-control units dropup">
                            <select class="form-control selectpicker units" data-live-search="true" id="unit_id" title="Seleccionar..." tabindex="-98"><option class="bs-title-option" value=""></option>
                                <option value="1" data-abbr="pza.">Pieza</option>
                                <option value="2" data-abbr="">Elemento</option>
                                <option value="3" data-abbr="serv.">Unidad de Servicio</option>
                                <option value="4" data-abbr="act.">Actividad</option>
                                <option value="5" data-abbr="kg">Kilogramo</option>
                                <option value="6" data-abbr="">Trabajo</option>
                                <option value="7" data-abbr="">Tarifa</option>
                                <option value="8" data-abbr="m">Metro</option>
                                <option value="9" data-abbr="">Paquete a granel</option>
                                <option value="10" data-abbr="">Caja base</option>
                            </select>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group ">
                            <label class="form-label">Cantidad</label>
                            <input type="number" class="form-control" id="quantity">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <label class="form-label">Precio</label>
                            <input type="number" step="0.0001" class="form-control" id="price">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                        <label class="form-label"><abbr title="Descuento en %">Desc</abbr>.</label>
                        <input type="number" step="0.01" max="100" min="0" value="0" class="form-control" id="discount_p">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-1">
                        <div class="form-group">
                        <label class="form-label"><abbr title="IVA Trasladado" class="initialism">IVA</abbr>.</label>
                            <div class="dropdown bootstrap-select form-control taxes">
                                <select class="form-control selectpicker taxes" data-live-search="true" id="iva_t" title="Sin IVA" tabindex="-98"><option class="bs-title-option" value=""></option>
                                    <option value="" data-percentage="">Sin IVA</option>
                                    <option value="1" data-percentage="0.000000">0%</option>
                                    <option value="2" data-percentage="0.160000">16%</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-1">
                        <div class="form-group">
                        <label class="form-label"><abbr title="IEPS Trasladado" class="initialism">IEPS</abbr>.</label>
                            <div class="dropdown bootstrap-select form-control taxes dropup">
                                <select class="form-control selectpicker taxes" data-live-search="true" id="ieps_t" title="Sin IEPS" tabindex="-98"><option class="bs-title-option" value=""></option>
                                    <option value="" data-percentage="">Sin IEPS</option>
                                    <option value="4" data-percentage="0.265000">26.5%</option>
                                    <option value="5" data-percentage="0.300000">30%</option>
                                    <option value="6" data-percentage="0.530000">53%</option>
                                    <option value="7" data-percentage="0.500000">50%</option>
                                    <option value="8" data-percentage="1.600000">160%</option>
                                    <option value="9" data-percentage="0.304000">30.4%</option>
                                    <option value="10" data-percentage="0.250000">25%</option>
                                    <option value="11" data-percentage="0.090000">9%</option>
                                    <option value="12" data-percentage="0.080000">8%</option>
                                    <option value="13" data-percentage="0.070000">7%</option>
                                    <option value="14" data-percentage="0.060000">6%</option>
                                    <option value="15" data-percentage="0.030000">3%</option>
                                    <option value="16" data-percentage="0.000000">0%</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group text-center">
                        <label class="form-label">Agregar</label>
                        <button type="button" class="btn btn-icon btn-light-success btn-sm mr-2" id="btn-add-product">
                        <i class="flaticon2-plus-1"></i>
                        </button>
                        </div>
                    </div>
                </div>

                <hr class="fw-bold text-primary">

                <div class="table-responsive-lg">
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">SKU</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Descripción-Producto</th>
                        <th scope="col">Importe</th>
                        <th scope="col">Desc.</th>
                        <th scope="col">IVA (t)</th>
                        <th scope="col">IEPS (t)</th>
                        </tr>
                    </thead>
                    <tbody id="items-list">
                        <tr id="product-5">
                                <th scope="row">1</th>
                                <td class="text-left"> Escritorios de oficina <button type="button" class="btn btn-icon btn-light-info btn-xs mr-2 change-alias" data-id="1662480388604"><i class="bi bi-pencil"></i></button> </td>
                                <td> 1 </td>
                                <td> $2,899.00 </td>
                                <td> $2,899.00 </td>
                                <td> N/A </td>
                                <td> <span class="text-success">+$463.84</span> </td>
                                <td> N/A </td>
                                <td>
                                <button type="button" class="btn btn-icon btn-light-danger btn-xs mr-2 remove-tr" data-id="1662480388604"><i class="bi bi-x fs-3x"></i></button> </td>
                        </tr>
                        <tr id="product-7">
                                <th scope="row">2</th>
                                <td class="text-left"> Sujeta Libros <button type="button" class="btn btn-icon btn-light-info btn-xs mr-2 change-alias" data-id="1662480412235"><i class="bi bi-pencil"></i></button> </td>
                                <td> 1 </td>
                                <td> $1,784.00 </td>
                                <td> $1,784.00 </td>
                                <td> N/A </td>
                                <td> <span class="text-success">+$285.44</span> </td>
                                <td> N/A </td>
                                <td>
                                <button type="button" class="btn btn-icon btn-light-danger btn-xs mr-2 remove-tr" data-id="1662480412235"><i class="bi bi-x fs-3x"></i></button> </td>
                        </tr>
                    </tbody>
                        <tfoot>
                            <tr>
                                <th scope="row" class="text-right" colspan="4">Subtotal</th>
                                <td colspan="4" id="subtotal">$4,683.00</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-right" colspan="4">Descuento</th>
                                <td colspan="4" id="discount">$0.00</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-right" colspan="4">Impuestos</th>
                                <td colspan="4" id="taxes">$749.28</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-right" colspan="4">Total</th>
                                <td colspan="4" id="total">$5,432.28</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                </div>
                <div class="card-footer">
                <div class="row">
                <div class="col-7">
                    <div class="checkbox-inline">
                        <label class="checkbox checkbox-outline">
                            <input type="checkbox" name="create_another"> Crear otra
                            <span></span>
                        </label>
                    </div>
                </div>
                <div class="col-5 text-right">
                    <button type="submit" class="btn btn-success mr-2">
                        <i class="flaticon2-check-mark"></i> Guardar
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
