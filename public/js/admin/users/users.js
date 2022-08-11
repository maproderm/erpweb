"use strict";

// Class definition
var KTDatatablesButtons = function () {
    // Shared variables
    var table;
    var dt;
    var filterPayment;

    // Private functions
    var initDatatable = function () {


        dt = $("#users_datatable").DataTable({
            searchDelay: 500,
            processing: true,
            serverSide: false,
            order: [[0, 'asc']],
            stateSave: true,
            ajax: {
                url: `${HOST_URL}/user/get-all`,
                method: 'GET'
            },
            columns: [
                { data: 'id' },
                { data: 'name' },
                { data: 'last_name' },
                { data: 'email' },
                { data: 'status' },
                { data: 'last_login' },

            ],
            columnDefs: [
                {
                    //ID
                    targets: 0,
                    orderable: true,
                    asc: true,
                    render: function (data) {
                        return `${data}`;
                    }
                },
                {   //NAME
                    targets: 1,
                    render: function (data, type, row) {
                        return `${data}`;
                    }
                },
                {   //LAST NAME
                    targets: 2,
                    render: function (data, type, row) {
                        return `${data}`;
                    }
                },
                {   //LAST NAME
                    targets: 3,
                    render: function (data, type, row) {
                        return `${data}`;
                    }
                },
                {
                    //ESTATUS
                    targets: 4,
                    render: function (data, type, row) {
                        if(data == 0){
                            return `<span class="badge badge-danger">Inactivo</span>`;
                        } else {
                            return `<span class="badge badge-success">Activo</span>`;
                        }
                    }
                },
                {   //LAST LOGIN
                    targets: 5,
                    render: function (data, type, row) {
                        return `${data}`;
                    }
                },
                {
                    //ACCIONES
                    targets: 6,
                    data: null,
                    orderable: false,
                    className: 'text-end',
                    render: function (data, type, row) {
                        return `
                            <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                                Acciones
                                <span class="svg-icon svg-icon-5 m-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                            <path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)"></path>
                                        </g>
                                    </svg>
                                </span>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="${HOST_URL}/user/editar/${row.id}" class="menu-link px-3" data-kt-docs-table-filter="edit_row">
                                        Editar
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-docs-table-filter="delete_row" data-user-id="${row.id}">
                                        Eliminar
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        `;
                    },
                },
            ],
            // Add data-filter attribute
            createdRow: function (row, data, dataIndex) {
                $(row).find('td:eq(4)').attr('data-filter', data.CreditCardType);
            }
        });

        table = dt.$;

        // Re-init functions on every table re-draw -- more info: https://datatables.net/reference/event/draw
        dt.on('draw', function () {
            handleDeleteRows();
            KTMenu.createInstances();
        });
    }

    // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
    var handleSearchDatatable = function () {
        const filterSearch = document.querySelector('[data-kt-docs-table-filter="search"]');
        filterSearch.addEventListener('keyup', function (e) {
            dt.search(e.target.value).draw();
        });
    }

    // Delete customer
    var handleDeleteRows = () => {
        // Select all delete buttons

        const deleteButtons = document.querySelectorAll('[data-kt-docs-table-filter="delete_row"]');

        deleteButtons.forEach(d => {
            // Delete button on click
            d.addEventListener('click', function (e) {
                e.preventDefault();

                // Select parent row
                const parent = e.target.closest('tr');
                const id = e.target.getAttribute('data-user-id');
                // Get customer name
                const userName = parent.querySelectorAll('td')[1].innerText;

                // SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
                Swal.fire({
                    text: "Estas seguro de querer eliminar el usuario " + userName + "?",
                    icon: "warning",
                    showCancelButton: true,
                    buttonsStyling: false,
                    confirmButtonText: "Si, eliminar!",
                    cancelButtonText: "No, cancelar",
                    customClass: {
                        confirmButton: "btn fw-bold btn-danger",
                        cancelButton: "btn fw-bold btn-active-primary"
                    }
                }).then(function (result) {
                    if (result.value) {
                        $.ajax({
                            url: '/user/delete/'+ id,
                            dataType: 'json',
                            contentType: false,
                            processData: false,
                            type: 'GET',
                        }).done(function(response){
                            Swal.fire({
                                title: response.title,
                                text: response.message,
                                icon: response.icon,
                                timer: 2000
                            }).then( () => location.reload() );
                        });
                    }
                });
            })
        });
    }

    var _downloadUsersData = function () {
        $('#download_user_data').on('click', function (){
            var name               = $('#kt_dataTable_search').val().toLowerCase(),
                code               = $('#code_filter').val().toLowerCase(),
                job                = $('#job_filter').val().toLowerCase(),
                men                = $('#men').is(':checked'),
                women              = $('#women').is(':checked'),
                date_admission     = $('#date_admission').val(),
                end_date_admission = $('#end_date_admission').val(),
                active             = $('#active').is(':checked'),
                inactive           = $('#inactive').is(':checked'),
                branch_id          = JSON.stringify($('#branch').val()),
                areas              = JSON.stringify($('#areas').val()),
                params             = `?searchName=${name}&code=${code}&job=${job}&men=${men}&women=${women}&date_admission=${date_admission}&end_date_admission=${end_date_admission}&active=${active}&inactive=${inactive}&branch_id=${branch_id}&areas=${areas}`;
            window.location.href = HOST_URL + '/get-excel-employees-data' + params;
        });
    }

    // Public methods
    return {
        init: function () {
            initDatatable();
            handleSearchDatatable();
            handleDeleteRows();
            _downloadUsersData();
        }
    }
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTDatatablesButtons.init();
});
