@extends('administrator.index')
@section('title','Clientes | MaProDerm')
@section('content')
<div class="d-flex flex-column-fluid">
    <div class="container-fluid">
        <div class="card card-custom">
            <div class="card-body">
                <div class="d-flex p-5">
                    <div class="col-md-4 my-2 my-md-0">
                        <div class="input-icon">
                            <input type="text" class="form-control" placeholder="Buscar cliente" id="filter_client_name"/>
                            <span>
                            </span>
                        </div>
                    </div>
                    <div class=" col-md-8 my-2 my-md-0 d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                        <button type="button" class="btn btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_client">Agregar</button>
                    </div>
                </div>
                <!--begin::Datatable-->
                <table class="table align-middle table-row-dashed gs-7 gy-3 ajax_datatable">
                    <thead>
                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                        <th>N°</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Correo</th>
                        <th>Dirección</th>
                        <th>Ciudad</th>
                        <th>Código Postal</th>
                        <th>Teléfono</th>
                        <th>N° Pedidos</th>
                        <th>Gasto Total</th>
                        <th>Promedio</th>
                        <th>Estatus</th>
                        <th>ültimo Login</th>
                        <th class="text-center min-w-100px">Acciones</th>
                    </tr>
                    </thead>
                    <tbody xclass="text-dark">
                    </tbody>
                </table>
                <!--end::Datatable-->
            </div>
        </div>
    </div>
</div>
@include('layouts.includes.admin.sales.clients.new_client')
@endsection
@push('scripts')
    <script type="text/javascript" src="{{  URL::asset ('js/admin/sales/client/clients.js?v='.rand())  }}"></script>
@endpush

