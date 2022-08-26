@extends('auth.index')
@section('content')
<!--begin::Body-->
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page bg image-->
        <style>body { background-image: url('assets/media/auth/bg3.jpg'); } [data-theme="dark"] body { background-image: url('assets/media/auth/bg3-dark.jpg'); }</style>
        <!--end::Page bg image-->
        <!--begin::Authentication - Signup Welcome Message -->
        <div class="d-flex flex-column flex-center flex-column-fluid">
            <!--begin::Content-->
            <div class="d-flex flex-column flex-center text-center p-10">
                <!--begin::Wrapper-->
                <div class="card card-flush w-lg-650px py-5">
                    <div class="card-body py-15 py-lg-20">
                        <!--begin::Title-->
                        <h1 class="fw-bolder text-gray-900 mb-5">Tu cuenta ha sido desactivado</h1>
                        <!--end::Title-->
                        <!--begin::Text-->
                        <div class="fw-semibold fs-6 text-gray-900 mb-8">Si se te ha redirigido a ésta página, tu cuenta ha sido inhabilitada
                        <br />Comunícate con el Soporte técnico de IMAQ para obtener ayuda.</div>
                        <!--end::Text-->
                        <!--begin::Link-->
                        <div class="mb-11">
                            <a href="{{ route('login') }}" class="btn btn-sm btn-primary">Ir al login</a>
                        </div>
                        <!--end::Link-->
                        <!--begin::Illustration-->
                        <div class="mb-0">
                            {{-- <img src="assets/media/auth/membership.png" class="mw-100 mh-300px theme-light-show" alt="" /> --}}
                            <img src="{{ asset('metronic/assets/media/auth/membership.png') }}" class="mw-100 mh-100px theme-light-show" alt="" />
                            <img src="assets/media/auth/membership-dark.png" class="mw-100 mh-300px theme-dark-show" alt="" />
                        </div>
                        <!--end::Illustration-->
                    </div>
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Authentication - Signup Welcome Message-->
    </div>
    <!--end::Root-->
    <!--end::Main-->


<!--end::Body-->
@endsection
