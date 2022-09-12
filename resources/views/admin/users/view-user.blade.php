@extends('administrator.index')
@section('title','Usuarios | IMAQ')
@section('content')
<div class="d-flex flex-column-fluid">
    <div class="container-fluid">
        <div class="card card-custom">
            <div class="card-header flex-wrap border-0 pt-6 pb-0">
                <div class="card-title">
                    <h3 class="card-label">Usuarios
                    <span class="d-block text-muted pt-2 font-size-sm">Lista de usuario registrados en el sistema</span></h3>
                </div>

                <div class="card-toolbar">
                    <!--begin::Dropdown-->
                        <button type="button" class="btn btn-light-primary font-weight-bolder" data-toggle="tooltip" aria-haspopup="true" data-placement="bottom" aria-expanded="false" id="download_user_data">
                            <i class="bi bi-person-plus-fill fs-2x"></i>
                            Nuevo Usuario
                        </button>

                </div>
            </div>
            <div class="card-body">
                <div class="p-5">
                    <div class="col-md-4 my-2 my-md-0">
                        <div class="input-icon">
                            <input type="text" class="form-control" placeholder="Buscar cliente" id="filter_client_name"/>
                            <span>
                                <i class="flaticon2-search-1 text-muted"></i>
                            </span>
                        </div>
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
            {{-- <div class="card-body">
                <div class="p-5">
                    <div class="col-md-4 my-2 my-md-0">
                        <div class="input-icon">
                            <input type="text" class="form-control" placeholder="Buscar usuario por nombre..." id="kt_dataTable_search" data-kt-docs-table-filter="search" />
                            <span>
                                <i class="flaticon2-search-1 text-muted"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <!--begin::Datatable-->
                <table id="users_datatable" class="table align-middle table-row-dashed fs-6 gy-5">
                    <thead>
                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                        <th>N°</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Correo</th>
                        <th>Estatus</th>
                        <th>Último login</th>
                        <th class="text-end min-w-100px">Acciones</th>
                    </tr>
                    </thead>
                    <tbody class="text-gray-600 fw-bold">
                    </tbody>
                </table>
                <!--end::Datatable-->
            </div> --}}
        </div>
    </div>
</div>
@endsection
@push('scripts')
    <script type="text/javascript" src="{{  URL::asset ('js/admin/users/users.js?v='.rand())  }}"></script>
@endpush
