<!--begin::Head-->
<head><base href="../../../">
<title>التعليم المستمر والدورات العليا</title>
    <meta name="description" content="التعليم المستمر والدورات العليا" />
    <meta name="keywords" content="التعليم المستمر والدورات العليا" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="{{asset('admin/media/logos/favicon.ico')}}" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href='https://fonts.googleapis.com/css?family=Cairo' rel='stylesheet'> 

    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{asset('admin/plugins/global/plugins.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/css/style.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />

    <style>
        table.dataTable thead th, table.dataTable thead td, table.dataTable tfoot th, table.dataTable tfoot td {
             text-align: right;
        }
        
    </style>
    <!--end::Global Stylesheets Bundle-->
    @yield('head')
</head>
<!--end::Head-->
