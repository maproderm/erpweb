"use strict";

// Class definition
var KTDatatablesButtons = function () {
    // Shared variables
    var datatable;
    // Private functions
    var initDatatable = function () {
        let url     = `${HOST_URL}/productos/get-maproderm-all`;
        let columns = [
            {   //ID
                targets   : 0,
                className : 'dt-head-center dt-body-center', // Center text for head and body column
                orderable : true,
                asc       : true,
                render    : function (data,type, row) {
                    // return `${row.id}`;
                    return `${row.sku_product_inventory}`;
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
                //CANTIDAD
                targets   : 2,
                // className : 'dt-head-center dt-body-center',
                render    : function (data, type, row) {
                    if(row.stock_inventory < row.minimum_inventory){
                        return `<span class="badge badge-danger">${row.stock_inventory}</span>`;
                    }if (row.stock_inventory == row.minimum_inventory){
                        return `<span class="badge badge-warning">${row.stock_inventory}</span>`;
                    } else {
                        return `<span class="badge badge-success">${row.stock_inventory}</span>`;
                    }
                }
            },
            {
                //PRECIO
                targets: 3,
                className : 'dt-head-center dt-body-center',
                render    : function (data, type, row) {
                    return `$${Number(row.price_product_inventory).toFixed(2)}`;
                }
            },
            {
                //PROMOCION
                targets: 3,
                className : 'dt-head-center dt-body-center',
                render    : function (data, type, row) {
                    if (row.discount_product_inventory == null) {
                        return `<span class="badge badge-light-warning">--</span>`;
                    } else {
                        return `$${Number(row.discount_product_inventory).toFixed(2)}`;
                    }

                }
            },
            {
                //DIVISION
                targets: 4,
                className : 'dt-head-center dt-body-center',
                render: function (data, type, row) {
                    return `${row.division.abrv}`;
                }
            },
            {
                //CATEGORIA
                targets: 5,
                render: function (data, type, row) {
                    return `${row.category.name}`;
                }
            },
            {
                //UBICACION
                targets: 6,
                render: function (data, type, row) {
                    if (row.levelarea == null) {
                        return `<span class="badge badge-light-danger">--</span>`;
                    } else {
                        return `${row.levelarea.name}`;
                    }
                }
            },
            // {
            //     //SKU
            //     targets: 7,
            //     render: function (data, type, row) {
            //         return `<span style="text-transform:uppercase">${row.sku_product_inventory}</span>`;
            //     }
            // },
            {
                //CODIGO DE BARRAS
                targets: 7,
                render: function (data, type, row) {
                    if (row.barcode_product_inventory == null) {
                        return `<span class="badge badge-light-danger">--</span>`;
                    } else {
                        return `<span style="text-transform:uppercase">${row.barcode_product_inventory}</span>`;
                    }
                }
            },
            // {
            //     //PROVEEDORES
            //     targets: 9,
            //     render: function (data, type, row) {
            //         // return `${row.id}`;
            //         return `${row.provider.name} ${row.provider.last_name}`;
            //     }
            // },
            {
                //MARCA
                targets: 8,
                render: function (data, type, row) {
                    return `${row.brand.name}`;
                }
            },
            // {
            //     //LINE_ID
            //     targets: 11,
            //     render: function (data, type, row) {
            //         return `${row.umedida.name}`;
            //     }
            // },
            {
                //TAMAÑO
                targets: 9,
                render: function (data, type, row) {
                    return `${row.size.name}`;
                }
            },
            // {
            //     //TIPO MATERIAL
            //     targets: 10,
            //     render: function (data, type, row) {
            //         if (row.typematerial == null) {
            //             return `<span class="badge badge-light-danger">--</span>`;
            //         } else {
            //             return `${row.typematerial.name}`;
            //         }

            //     }
            // },
            {
                //U SAT
                targets: 11,
                render: function (data, type, row) {
                    return `${row.satkeyunidad.key}`;
                }
            },
            {
                //P SAT
                targets: 12,
                render: function (data, type, row) {
                    return `${row.clasesat.key}`;
                }
            },
            {
                //LINE_ID
                targets: 13,
                render: function (data, type, row) {
                    return `${row.minimum_inventory}`;
                }
            },
            // {
                //INVENTARIO MINIMO
            //     targets: 17,
            //     className : 'dt-head-center dt-body-center',
            //     render    : function (data, type, row) {
            //         return `$${Number(row.unit_cost_inventory).toFixed(2)}`;
            //     }
            // },
            {
                //NAME
                targets   : 14,
                render    : function (data, type, row) {
                    if (row.status == 1) {
                        return `<span class="badge badge-light-success">Activo</span>`;
                    }if (row.status == 2){
                        return `<span class="badge badge-light-danger">Rechazado</span>`;
                    }if (row.status == 3){
                        return `<span class="badge badge-light-info">Inactivo</span>`;
                    }if (row.status == 0){
                        return `<span class="badge badge-light-warning">Revisión</span>`;
                    } else {
                        return `<span class="badge badge-light-secondary">--</span>`;
                    }
                }
            },
            {
                //ACCIONES
                targets: 15,
                data: null,
                orderable: false,
                className: 'text-end',
                render: function (data, type, row) {
                    return `
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

    let _modalDetails = function(){
        $(document).on('click','.employee_details', function(){
            let id = $(this).data('id');
            factoryNixDit.methods.processDataByAjax(`empleados/${id}`,'GET').done(function(response){
                if(!response.error){
                    let data = response.employee;
                    $('#employee_name_title').text(`Detalles del empleado: "${data.name} ${data.last_name} ${data.mothers_last_name}"`);
                    $('#name_details').text(`${data.name} ${data.last_name} ${data.mothers_last_name}`);
                    $('#phone_details').text(data.phone);
                    $('#age_details').text(data.age);
                    $('#address_details').text(data.address);
                    $('#state_details').text(data.state?.name);
                    $('#municipality_details').text(data.municipality?.name);
                    (data.gender == 'Masculino') ? $('#gender_details').text('Hombre') : $('#gender_details').text('Mujer');
                    $('#date_register_details').text(data.date_admission);
                    $('#job_details').text(data.job?.name);
                    (data.schedule) ? $('#schedule_details').text(data.schedule?.name) : $('#schedule_details').text('Sin horario');
                    (data.type_salary == 1) ? $('#salary_text_details').text('Base') : $('#salary_text_details').text('Por destajo');
                    $('#salary_details').text("$" + Number(data.salary).toFixed(2));
                    // $('#salary_per_day_details').text("$" + Number(data.salary_per_day).toFixed(2));
                    $('#salary_per_hour_details').text("$" + Number(data.salary_per_hour).toFixed(2));
                    (data.custom_salary == 1) ? $('#custom_salary_details').text('SI') : $('#custom_salary_details').text('NO') ;
                    $('#birthday_details').text(data.clinical_data.birthday);
                    $('#type_blood_details').text(data.clinical_data.blood_type);
                    $('#weight_details').text(`${data.clinical_data.weight} kg`);
                    $('#height_details').text(`${data.clinical_data.height} cm`);
                    (data.clinical_data.emergency_phone) ? $('#emergency_phone_details').text(data.clinical_data.emergency_phone) : $('#emergency_phone_details').text('No registrado');
                    (data.clinical_data.current_condition) ? $('#current_condition_details').text(data.clinical_data.current_condition) : $('#current_condition_details').text('No registrado');
                    (data.curp) ? $('#curp_details').text(data.curp) : $('#curp_details').text('No registrado');
                    (data.rfc) ? $('#rfc_details').text(data.rfc) : $('#rfc_details').text('No registrado');
                    (data.clinical_data.nss) ? $('#nss_details').text(data.clinical_data.nss) : $('#nss_details').text('No registrado');
                    $('#infonavit_details').text('$' + Number(data.special_discounts.infonavit_discount).toFixed(2));
                    $('#imss_details').text('$' + Number(data.special_discounts.imss_discount).toFixed(2));
                    $('#isr_details').text('$' + Number(data.special_discounts.isr_discount).toFixed(2));
                    if(data.salary_support == 1 && data.salary_supports?.length > 0)
                    {
                        $('#salary_support_check').text('SI');
                        $('#salary_support_details_div').show();
                        $('#salary_support_details_div').empty();
                        $.each(data.salary_supports,function(index,value){
                            let row = `
                                <div class="d-block">
                                    <span class="label label-primary label-inline">
                                        ${value.concept}</span> <span class="text-info">=</span> <span class="label label-primary label-inline">$${Number(value.quantity).toFixed(2)}
                                    </span> <br/>
                                </div>
                            `
                            $('#salary_support_details_div').append(row);
                        });
                        $('#salary_support_details_note').show();
                    } else {
                        $('#salary_support_check').text('NO');
                        $('#salary_support_details_div').hide();
                        $('#salary_support_details_div').empty();
                        $('#salary_support_details_note').hide();
                    }
                    if(data.payment_type == 2){
                        $('#payment_method_details').text('DEPÓSITO BANCARIO');
                        $('#payment_method_card_details').show();
                        (data.bank?.name) ? $('#bank_details').text(data.bank?.name) : $('#bank_details').text('No registrado');
                        (data.bank_account.card_number) ? $('#card_number_details').text(data.bank_account.card_number) : $('#card_number_details').text('No registrado');
                        (data.bank_account.type_account) ? $('#type_account_details').text(data.bank_account.type_account?.name) : $('#type_account_details').text('No registrado');
                    } else {
                        $('#payment_method_details').text('EFECTIVO');
                        $('#payment_method_card_details').hide();
                    }
                    switch (data.type_employee) {
                        case 1:
                                $('#type_employee_details').text('Recibirá bono por producción');
                            break;
                        case 2:
                                $('#type_employee_details').text('Recibirá bono por horas extras');
                            break;
                        case 3:
                                $('#type_employee_details').text('Recibirá solo salario base');
                            break;
                        default:
                            break;
                    }
                    $('#user_details').text((data.user) ? data.user.email : 'Usuario inactivo');
                    $('#code_details').text(data.code);
                    $('#employee_details').modal('show');
                } else {
                    Swal.fire(
                        response.title,
                        response.message,
                        response.type
                    )
                }
            });
        });
    }

    // Public methods
    return {
        init: function () {
            initDatatable();
            _modalDetails();
            handleSearchDatatable();
            handleDeleteRows();
        }
    }
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTDatatablesButtons.init();
});
