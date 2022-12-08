@extends('administrator.index')
@section('title','Venta | MaProDerm')
@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-fluid">
        <!--begin::Layout-->
        <div class="d-flex flex-column flex-xl-row">
            <!--begin::Content-->
            <div class="d-flex-auto flex-row-fluid me-xl-9 mb-10 mb-xl-1">
                <div class="card card-flush bg-body" id="kt_pos_form"> <br>
                    <div class="d-flex align-items-center xposition-relative xmb-n5 gs-3 gy-4 my-0">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                        <span class="svg-icon svg-icon-1 position-absolute ms-4">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
                                <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor"></path>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <input type="text" data-kt-ecommerce-edit-order-filter="search" class="form-control form-control-solid w-100 w-lg-50 ps-14" placeholder="Burcar producto">
                    </div>
                    <table class="table align-middle gs-3 gy-4 my-0">
                        <!--begin::Table head-->
                        <thead class="text-center fw-bold">
                            <tr>
                                <th class="min-w-175px ">Producto(s)</th>
                                <th class="w-125px">Cantidad</th>
                                <th class="w-60px">Total</th>
                            </tr>
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody>
                            <tr data-kt-pos-element="item" data-kt-pos-item-price="33">
                                <td class="pe-0">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('metronic/assets/media/stock/ecommerce/1.gif') }}" class="w-50px h-50px rounded-3 me-3" alt="" />
                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-6 me-1">T-Bone Stake</span>
                                    </div>
                                </td>
                                <td class="pe-0">
                                    <!--begin::Dialer-->
                                    <div class="position-relative d-flex align-items-center" data-kt-dialer="true" data-kt-dialer-min="1" data-kt-dialer-max="10" data-kt-dialer-step="1" data-kt-dialer-decimals="0">
                                        <!--begin::Decrease control-->
                                        <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="decrease">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                            <span class="svg-icon svg-icon-3x">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--end::Decrease control-->
                                        <!--begin::Input control-->
                                        <input type="text" class="form-control border-0 text-center px-0 fs-3 fw-bold text-gray-800 w-30px" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="readonly" value="2" />
                                        <!--end::Input control-->
                                        <!--begin::Increase control-->
                                        <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="increase">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                            <span class="svg-icon svg-icon-3x">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                                                    <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--end::Increase control-->
                                    </div>
                                    <!--end::Dialer-->
                                </td>
                                <td class="pe-0">
                                    <span class="fw-bold text-primary fs-2" data-kt-pos-element="item-total">$66.00</span>
                                </td>
                                <td class="text-end">
                                    <!--begin::Dialer-->
                                    <div class="position-relative d-flex align-items-center">
                                        <!--begin::Decrease control-->
                                        <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                            <span class="svg-icon svg-icon-3x">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--end::Decrease control-->
                                    </div>
                                    <!--end::Dialer-->
                                </td>
                            </tr>
                            {{-- <tr data-kt-pos-element="item" data-kt-pos-item-price="7.5">
                                <td class="pe-0">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('metronic/assets/media/stock/ecommerce/70.gif') }}" class="w-50px h-50px rounded-3 me-3" alt="" />
                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-6 me-1">Soup of the Day</span>
                                    </div>
                                </td>
                                <td class="pe-0">
                                    <!--begin::Dialer-->
                                    <div class="position-relative d-flex align-items-center" data-kt-dialer="true" data-kt-dialer-min="1" data-kt-dialer-max="10" data-kt-dialer-step="1" data-kt-dialer-decimals="0">
                                        <!--begin::Decrease control-->
                                        <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="decrease">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                            <span class="svg-icon svg-icon-3x">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--end::Decrease control-->
                                        <!--begin::Input control-->
                                        <input type="text" class="form-control border-0 text-center px-0 fs-3 fw-bold text-gray-800 w-30px" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="readonly" value="1" />
                                        <!--end::Input control-->
                                        <!--begin::Increase control-->
                                        <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="increase">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                            <span class="svg-icon svg-icon-3x">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                                                    <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--end::Increase control-->
                                    </div>
                                    <!--end::Dialer-->
                                </td>
                                <td class="text-end">
                                    <span class="fw-bold text-primary fs-2" data-kt-pos-element="item-total">$7.50</span>
                                </td>
                            </tr> --}}
                            {{-- <tr data-kt-pos-element="item" data-kt-pos-item-price="13.5">
                                <td class="pe-0">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('metronic/assets/media/stock/ecommerce/192.gif') }}" class="w-50px h-50px rounded-3 me-3" alt="" />
                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-6 me-1">Pancakes</span>
                                    </div>
                                </td>
                                <td class="pe-0">
                                    <!--begin::Dialer-->
                                    <div class="position-relative d-flex align-items-center" data-kt-dialer="true" data-kt-dialer-min="1" data-kt-dialer-max="10" data-kt-dialer-step="1" data-kt-dialer-decimals="0">
                                        <!--begin::Decrease control-->
                                        <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="decrease">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                            <span class="svg-icon svg-icon-3x">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--end::Decrease control-->
                                        <!--begin::Input control-->
                                        <input type="text" class="form-control border-0 text-center px-0 fs-3 fw-bold text-gray-800 w-30px" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="readonly" value="2" />
                                        <!--end::Input control-->
                                        <!--begin::Increase control-->
                                        <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="increase">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                            <span class="svg-icon svg-icon-3x">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                                                    <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--end::Increase control-->
                                    </div>
                                    <!--end::Dialer-->
                                </td>
                                <td class="text-end">
                                    <span class="fw-bold text-primary fs-2" data-kt-pos-element="item-total">$27.00</span>
                                </td>
                            </tr> --}}
                            {{-- <tr data-kt-pos-element="item" data-kt-pos-item-price="13.5">
                                <td class="pe-0">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('metronic/assets/media/stock/ecommerce/193.gif') }}" class="w-50px h-50px rounded-3 me-3" alt="" />
                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-6 me-1">Pancakes</span>
                                    </div>
                                </td>
                                <td class="pe-0">
                                    <!--begin::Dialer-->
                                    <div class="position-relative d-flex align-items-center" data-kt-dialer="true" data-kt-dialer-min="1" data-kt-dialer-max="10" data-kt-dialer-step="1" data-kt-dialer-decimals="0">
                                        <!--begin::Decrease control-->
                                        <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="decrease">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                            <span class="svg-icon svg-icon-3x">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--end::Decrease control-->
                                        <!--begin::Input control-->
                                        <input type="text" class="form-control border-0 text-center px-0 fs-3 fw-bold text-gray-800 w-30px" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="readonly" value="2" />
                                        <!--end::Input control-->
                                        <!--begin::Increase control-->
                                        <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="increase">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                            <span class="svg-icon svg-icon-3x">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                                                    <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--end::Increase control-->
                                    </div>
                                    <!--end::Dialer-->
                                </td>
                                <td class="text-end">
                                    <span class="fw-bold text-primary fs-2" data-kt-pos-element="item-total">$27.00</span>
                                </td>
                            </tr> --}}
                        </tbody>
                        <!--end::Table body-->
                    </table>
                </div>

            </div>
            <!--end::Content-->
            <!--begin::Sidebar-->
            <div class="flex-row-auto w-xl-425px">
                <!--begin::Pos order-->
                <div class="card card-flush bg-body" id="kt_pos_form">
                    <!--begin::Header-->
                    <div class="card-header pt-4">
                        <h5 class="card-title fw-bold text-gray-800 fs-1qx">Orden Actual</h5>
                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                            <a xhref="#" class="btn btn-light-primary fs-4 fw-bold py-4">Limpiar</a>
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-0">
                        <!--begin::Table container-->
                        <div class="table-responsive mb-8">
                        </div>
                        <!--end::Table container-->
                        <!--begin::Summary-->
                        <div class="d-flex flex-stack bg-success rounded-3 p-6 mb-11">
                            <!--begin::Content-->
                            <div class="fs-6 fw-bold text-white">
                                <span class="d-block mb-2">Cantidad productos</span>
                                <span class="d-block lh-1 mb-2">Subtotal</span>
                                <span class="d-block mb-9">Descuento</span>
                                <span class="d-block fs-2qx lh-1">Total</span>
                            </div>
                            <!--end::Content-->
                            <!--begin::Content-->
                            <div class="fs-6 fw-bold text-white text-end">
                                <span class="d-block lh-1 mb-2" data-kt-pos-element="total">4</span>
                                <span class="d-block mb-2" data-kt-pos-element="discount">$100.50</span>
                                <span class="d-block mb-9" data-kt-pos-element="tax">-$8.00</span>
                                <span class="d-block fs-2qx lh-1" data-kt-pos-element="grant-total">$93.46</span>
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Summary-->
                        <!--begin::Payment Method-->
                        <div class="m-0">
                            <!--begin::Title-->
                            <h1 class="fw-bold text-gray-800 mb-5">Método de pago</h1>
                            <!--end::Title-->
                            <!--begin::Radio group-->
                            <div class="d-flex flex-equal gap-5 gap-xxl-9 px-0 mb-12" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
                                <!--begin::Radio-->
                                <label class="btn bg-light btn-color-gray-600 btn-active-text-gray-800 border border-3 border-gray-100 border-active-primary btn-active-light-primary w-100 px-4" data-kt-button="true">
                                    <!--begin::Input-->
                                    <input class="btn-check" type="radio" name="method" value="0" />
                                    <!--end::Input-->
                                    <!--begin::Icon-->
                                    <i class="fonticon-cash-payment fs-2hx mb-2 pe-0"></i>
                                    <!--end::Icon-->
                                    <!--begin::Title-->
                                    <span class="fs-7 fw-bold d-block">Efectivo</span>
                                    <!--end::Title-->
                                </label>
                                <!--end::Radio-->
                                <!--begin::Radio-->
                                <label class="btn bg-light btn-color-gray-600 btn-active-text-gray-800 border border-3 border-gray-100 border-active-primary btn-active-light-primary w-100 px-4 active" data-kt-button="true">
                                    <!--begin::Input-->
                                    <input class="btn-check" type="radio" name="method" value="1" />
                                    <!--end::Input-->
                                    <!--begin::Icon-->
                                    <i class="fonticon-card fs-2hx mb-2 pe-0"></i>
                                    <!--end::Icon-->
                                    <!--begin::Title-->
                                    <span class="fs-7 fw-bold d-block">Tarjeta</span>
                                    <!--end::Title-->
                                </label>
                                <!--end::Radio-->
                                <!--begin::Radio-->
                                <label class="btn bg-light btn-color-gray-600 btn-active-text-gray-800 border border-3 border-gray-100 border-active-primary btn-active-light-primary w-100 px-4" data-kt-button="true">
                                    <!--begin::Input-->
                                    <input class="btn-check" type="radio" name="method" value="2" />
                                    <!--end::Input-->
                                    <!--begin::Icon-->
                                    <i class="fonticon-mobile-payment fs-2hx mb-2 pe-0"></i>
                                    <!--end::Icon-->
                                    <!--begin::Title-->
                                    <span class="fs-7 fw-bold d-block">Vales</span>
                                    <!--end::Title-->
                                </label>
                                <!--end::Radio-->
                            </div>
                            <!--end::Radio group-->
                            <!--begin::Actions-->
                            <button class="btn btn-primary fs-1 w-100 py-4">Imprimir recibo</button>
                            <!--end::Actions-->
                        </div>
                        <!--end::Payment Method-->
                    </div>
                    <!--end: Card Body-->
                </div>
                <!--end::Pos order-->
            </div>
            <!--end::Sidebar-->
        </div>
        <!--end::Layout-->
    </div>
    <!--end::Container-->
</div>

@endsection
