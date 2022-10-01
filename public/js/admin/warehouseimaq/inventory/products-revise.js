"use strict";

// Class definition
var KTDatatablesButtons = function () {
    // Shared variables
    var datatable;
    // Private functions
    var initDatatable = function () {
        let url     = `${HOST_URL}/products/get-revise-all`;
        let columns = [
            {   //ID
                targets   : 0,
                className : 'dt-head-center dt-body-center', // Center text for head and body column
                orderable : true,
                asc       : true,
                render    : function (data,type, row) {
                    return `${row.id}`;
                }
            },
            {
                //NAME
                targets   : 1,
                render    : function (data, type, row) {
                    return `${row.name_product_inventory}`;
                }
            },
            {
                //CODE
                targets   : 2,
                orderable : false,
                render    : function (data, type, row) {
                    if(row.stock_inventory <= row.minimum_inventory){
                        return `<span class="badge badge-danger">${row.stock_inventory}</span>`;
                    }if (row.stock_inventory == row.minimum_inventory){
                        return `<span class="badge badge-warning">${row.stock_inventory}</span>`;
                    } else {
                        return `<span class="badge badge-success">${row.stock_inventory}</span>`;
                    }
                }
            },
            {
                //LINE_ID
                targets: 3,
                className : 'dt-head-center dt-body-center',
                render    : function (data, type, row) {
                    return `$${Number(row.price_product_inventory).toFixed(2)}`;
                }
            },
            {
                //BRAND_ID
                targets: 4,
                orderable: false,
                render: function (data, type, row) {
                    return `${row.division.name}`;
                }
            },
            {
                //BRAND_ID
                targets: 5,
                orderable: false,
                render: function (data, type, row) {
                    return `${row.category.name}`;
                }
            },
            {
                //CATEGORY_ID
                targets: 6,
                orderable: false,
                render: function (data, type, row) {
                    if (row.levelarea == null) {
                        return `<span class="badge badge-light-danger">--</span>`;
                    } else {
                        return `${row.levelarea.name}`;
                    }
                }
            },
            {
                //LINE_ID
                targets: 7,
                render: function (data, type, row) {
                    return `<span style="text-transform:uppercase">${row.sku_product_inventory}</span>`;
                }
            },
            {
                //LINE_ID
                targets: 8,
                render: function (data, type, row) {
                    if (row.barcode_product_inventory == null) {
                        return `<span class="badge badge-light-danger">--</span>`;
                    } else {
                        return `<span style="text-transform:uppercase">${row.barcode_product_inventory}</span>`;
                    }
                }
            },
            {
                //LINE_ID
                targets: 9,
                render: function (data, type, row) {
                    // return `${row.id}`;
                    return `${row.provider.name} ${row.provider.last_name}`;
                }
            },
            {
                //LINE_ID
                targets: 10,
                render: function (data, type, row) {
                    return `${row.brand.name}`;
                }
            },
            {
                //LINE_ID
                targets: 11,
                render: function (data, type, row) {
                    return `${row.umedida.name}`;
                }
            },
            {
                //LINE_ID
                targets: 12,
                render: function (data, type, row) {
                    return `${row.size.name}`;
                }
            },
            {
                //LINE_ID
                targets: 13,
                render: function (data, type, row) {
                    if (row.typematerial == null) {
                        return `<span class="badge badge-light-danger">--</span>`;
                    } else {
                        return `${row.typematerial.name}`;
                    }

                }
            },
            {
                //LINE_ID
                targets: 14,
                render: function (data, type, row) {
                    return `${row.satkeyunidad.key}`;
                }
            },
            {
                //LINE_ID
                targets: 15,
                render: function (data, type, row) {
                    return `${row.clasesat.key}`;
                }
            },
            {
                //LINE_ID
                targets: 16,
                render: function (data, type, row) {
                    return `${row.minimum_inventory}`;
                }
            },
            {
                //LINE_ID
                targets: 17,
                className : 'dt-head-center dt-body-center',
                render    : function (data, type, row) {
                    return `$${Number(row.unit_cost_inventory).toFixed(2)}`;
                }
            },
            // {
            //     //LINE_ID
            //     targets: 18,
            //     className : 'dt-head-center dt-body-center',
            //     render    : function (data, type, row) {
            //         return `$${Number(row.suggested_sale_inventory).toFixed(2)}`;
            //     }
            // },
            {
                //ACCIONES
                targets: 18,
                data: null,
                orderable: false,
                className: 'text-end',
                render: function (data, type, row) {
                    return `
                        <a href="#" class="btn btn-icon btn-light-warning"><i class="bi bi-pencil"></i></i></a>
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
            datatable.columns(1).search(client_name).draw();
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
