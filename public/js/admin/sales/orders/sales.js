"use strict";

// Class definition
var KTDatatablesButtons = function () {
    // Shared variables
    var datatable;
    // Private functions
    var initDatatable = function () {
        let url     = `${HOST_URL}/pedidos/get-all`;
        let columns = [
            {   //ID
                targets   : 0,
                className : 'dt-head-center dt-body-center', // Center text for head and body column
                orderable : true,
                asc       : true,
                render    : function (data,type, row) {
                    // return `${row.id}`;
                    return `${row.num_order}`;
                }
            },
            {
                //NAME
                targets   : 1,
                render    : function (data, type, row) {
                    return `${row.user.name} ${row.user.last_name}`;
                }
            },
            {
                //EMAIL
                targets   : 1,
                render    : function (data, type, row) {
                    return `${row.user.email}`;
                }
            },
            {
                //TOTAL
                targets: 2,
                // className : 'dt-head-center dt-body-center',
                render    : function (data, type, row) {
                    return `$${Number(row.total).toFixed(2)}`;
                }
            },
            {
                //DATE CREATED
                targets   : 1,
                render    : function (data, type, row) {
                    if (row.created_at == null) {
                        return `<span class="badge badge-secondary">--</span>`;
                    }else {
                        let date       = new Date(row.created_at),
                        // dateFormat = new Intl.DateTimeFormat('es', { year: 'numeric',month: 'long',day: '2-digit' }).format(date);
                        dateFormat = new Intl.DateTimeFormat('es').format(date);
                        return `${dateFormat}`;
                    }
                }
            },
            {
                //STATUS
                targets   : 3,
                render    : function (data, type, row) {
                    if (row.status == 0) {
                        return `<span class="badge badge-secondary">Borrador</span>`;
                    }if (row.status == 1){
                        return `<span class="badge badge-light-primary">Cotización</span>`;
                    }if (row.status == 2){
                        return `<span class="badge badge-light-info">Procesando</span>`;
                    }if (row.status == 3){
                        return `<span class="badge badge-success">Completado</span>`;
                    }if (row.status == 4){
                        return `<span class="badge badge-light-danger">Cancelado</span>`;
                    } else {
                        return `<span class="badge badge-light-secondary">--</span>`;
                    }
                }
            },
            {
                //ACCIONES
                targets: 4,
                data: null,
                orderable: false,
                className: 'text-center',
                render: function (data, type, row) {
                    return `
                        <a href="#" class="btn btn-icon btn-light-primary"><i class="bi bi-eye-fill fs-2 me-2"></i></i></a>
                        <a href="#" class="btn btn-icon btn-light-info"><i class="bi bi-printer fs-2 me-2"></i></i></a>
                        <a href="#" class="btn btn-icon btn-light-warning" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target" id="kt_toolbar_primary_button"><i class="bi bi-pencil"></i></i></a>
                        <a href="#" class="btn btn-icon btn-light-danger"><i class="bi bi-trash fs-2 me-2"></i></i></a>
                    `;
                }
            },
        ]
        datatable = factoryNixDit.methods.activateDataTable(url,columns);
    }

    // Search Datatable
    var handleSearchDatatable = function () {
        $('#filter_client_name').on('keyup', function(event){ // Filter by client name
            var client_name = $(this).val();
            // datatable.search(event.target.value).draw();
            datatable.search(client_name).draw();

            // datatable.columns(1).search(client_name).draw();
            // dt.search(e.target.value).draw();
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
                const productName = parent.querySelectorAll('td')[1].innerText;

                // SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
                Swal.fire({
                    text: "Estas seguro de querer eliminar el usuario " + productName + "?",
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



    // Public methods
    return {
        init: function () {
            initDatatable();
            handleSearchDatatable();
            handleDeleteRows();
        }
    }
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTDatatablesButtons.init();
});
