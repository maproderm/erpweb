@extends('administrator.index')
@section('title','Proveedores | IMAQ')
@section('content')
<div class="d-flex flex-column-fluid">
    <div class="container-fluid">
        <div class="card card-custom">
            <div class="card-body">
                <div class="p-5">
                    <div class="col-md-4 my-2 my-md-0">
                        <div class="input-icon">
                            <input type="text" class="form-control" placeholder="Buscar proveedores" id="filter_client_name"/>
                            <span>
                                <i class="flaticon2-search-1 text-muted"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <!--begin::Datatable-->
                {{-- <table class="table align-middle table-row-dashed fs-6 gy-5 ajax_datatable"> --}}
                <table id="kt_datatable_horizontal_scroll" class="table table-striped table-row-bordered gy-5 gs-7 ajax_datatable">
                    <thead>
                    {{-- <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0"> --}}
                    <tr class="text-start text-dark fw-bolder fs-7 text-uppercase gs-0">
                        <th>N°</th>
                        <th class="min-w-100px">Nombre</th>
                        <th>Apellidos</th>
                        <th>Correo</th>
                        <th>Teléfono</th>
                        <th>RFC</th>
                        <th class="text-center">Dirección</th>
                        <th class="text-center">Status</th>
                        <th class="text-center min-w-100px">Acciones</th>
                    </tr>
                    </thead>
                    <tbody xclass="text-gray-600 fw-bold">
                    </tbody>
                </table>
                <!--end::Datatable-->
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
    <script type="text/javascript" src="{{  URL::asset ('js/admin/warehouseimaq/provider/providers.js?v='.rand())  }}"></script>
@endpush