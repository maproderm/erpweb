<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="es">
	<!--begin::Head-->
	<head><base href="">
		<title>@yield('title','IMAQ | Tablero de control')</title>
		<meta charset="utf-8" />
		<meta name="description" content="IMAQ Enterprise Resource Planning. Licencia Industrial Maquiladora OSC" />
		<meta name="keywords" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Admin - IMAQ Enterprise Resource Planning" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="{{ asset('metronic/assets/media/logos/imaq.png') }}" />
		<!--begin::Fonts-->
		{{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" /> --}}
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used by this page)-->
		<link href="{{ asset('metronic/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css?v='.rand()) }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('metronic/assets/plugins/custom/datatables/datatables.bundle.css?v='.rand()) }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('metronic/assets/plugins/custom/prismjs/prismjs.bundle.css?v='.rand()) }}" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{ asset('metronic/assets/plugins/global/plugins.bundle.css?v='.rand()) }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('metronic/assets/css/style.bundle.css?v='.rand()) }}" rel="stylesheet" type="text/css" />
        {{-- <link href="{{ asset('css/styles.css?v='.rand()) }}" rel="stylesheet" type="text/css" /> --}}
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	{{-- <body data-kt-name="metronic" id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px"> --}}
	<body data-kt-name="metronic" id="kt_body" class="header-tablet-and-mobile-fixed aside-enabled" >
