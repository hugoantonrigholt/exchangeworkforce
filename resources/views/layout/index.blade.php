<html lang="en">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Libs CSS -->
    <link href="{{ url('fonts/Feather/feather.css') }}" rel="stylesheet">
    <link href="{{ url('libs/flickity.min.css') }}" rel="stylesheet">
    <link href="{{ url('libs/flickity-fade/flickity-fade.css') }}" rel="stylesheet">
    <link href="{{ url('libs/aos/dist/aos.css') }}" rel="stylesheet">
    <link href="{{ url('libs/jarallax/dist/jarallax.css') }}" rel="stylesheet">
    <link href="{{ url('libs/highlightjs/styles/vs2015.css') }}" rel="stylesheet">
    <link href="{{ url('libs/@fancyapps/fancybox/dist/jquery.fancybox.min.css') }}" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="57x57" href="{{ url('img/exchange/favicon/apple-icon-57x57.png') }}">
    <link rel=" apple-touch-icon" sizes="60x60" href="{{ url('img/exchange/favicon/apple-icon-60x60.png') }}">
    <link rel=" apple-touch-icon" sizes="72x72" href="{{ url('img/exchange/favicon/apple-icon-72x72.png') }}">
    <link rel=" apple-touch-icon" sizes="76x76" href="{{ url('img/exchange/favicon/apple-icon-76x76.png') }}">
    <link rel=" apple-touch-icon" sizes="114x114" href="{{ url('img/exchange/favicon/apple-icon-114x114.png') }}>" <link
        rel=" apple-touch-icon" sizes="120x120" href="{{ url('img/exchange/favicon/apple-icon-120x120.png') }}">
    <link rel=" apple-touch-icon" sizes="144x144" href="{{ url('img/exchange/favicon/apple-icon-144x144.png') }}">
    <link rel=" apple-touch-icon" sizes="152x152" href="{{ url('img/exchange/favicon/apple-icon-152x152.png') }}">
    <link rel=" apple-touch-icon" sizes="180x180" href="{{ url('img/exchange/favicon/apple-icon-180x180.png') }}">
    <link rel=" icon" type="image/png" sizes="192x192"
        href="{{ url('img/exchange/favicon/android-icon-192x192.png') }}">
    <link rel=" icon" type="image/png" sizes="32x32" href="{{ url('img/exchange/favicon/favicon-32x32.png') }}">
    <link rel=" icon" type="image/png" sizes="96x96" href="{{ url('img/exchange/favicon/favicon-96x96.png') }}">
    <link rel=" icon" type="image/png" sizes="16x16" href="{{ url('img/exchange/favicon/favicon-16x16.png') }}">
    <link rel=" manifest" href="{{ url('img/exchange/favicon/manifest.json') }}">
    <meta name=" msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ url('img/exchange/favicon/ms-icon-144x144.png') }}">
    <meta name=" theme-color" content="#ffffff">

    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">


    <!-- Map -->
    <link href='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css' rel='stylesheet' />

    <!-- Theme CSS -->
    <link href="{{ url('css/theme.min.css') }}" rel="stylesheet">
    <link href="{{ url('css/app.css') }}" rel="stylesheet">
    <style>
        .bg-ew {
            background: #425563;
        }

        body {
            height: 100vh;
        }

        body>div.col-3.px-lg-0.border-bottom.border-bottom-lg-0.border-right-lg.border-gray-300.sidenav.sidenav-index.sidenav-left.bg-white {
            position: absolute !important;
            top: 0px !important;
            height: 100vh !important;
            width: 250px;
            transition: .7s ease-in-out;
            z-index: 999;
            margin-left: -250px
        }

        .text-ew-dark {
            color: #425563;
        }

        .btn-dark {
            background: #425563;
        }

        .btn-dark:hover {
            background: #506371;
        }

        .form-check-input~label {
            padding: 5px 10px;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0;
            transition: .3s;
            cursor: pointer;
            margin-top: 1px;
            margin-right: 15px;
            width: 100%;
            padding-left: 30px;
            font-size: 15px;
        }

        .form-check-input {
            display: none;
        }

        .form-check-input:checked+label {
            font-weight: 900;
            background: #425563;
            color: #D9E1E2 !important;
        }

        .list-item {
            width: 100% !important;
        }

        .page-container {
            max-width: 95%;
            margin: 0 auto;
        }

        table.dataTable tbody tr {
            background: transparent !important;
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #161c2d;
            background-color: transparent;
            border-radius: 10px
        }

        .list-group-item {
            padding: 20px;
        }

        .list-group-item:last-child,
        .list-group-item:first-child {
            border-top-right-radius: 0 !important;
            border-top-left-radius: 0 !important;
            border-bottom-right-radius: 0 !important;
            border-bottom-left-radius: 0 !important;
        }

        input[type=checkbox][disabled]~label {
            color: #e4e6e8 !important
        }

        .dataTables_wrapper .dataTables_filter input {
            box-shadow: rgba(22, 28, 45, 0.1) 0px 2px 6px 0px;
            display: block;
            width: 100%;
            height: calc(1.6em + 1.625rem + 2px);
            padding: .8125rem 1.25rem;
            padding-right: 200px;
            font-size: 1.0625rem;
            font-weight: 400;
            line-height: 1.6;
            color: #161c2d;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #f1f4f8;
            border-radius: .375rem;
            -webkit-transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }

        .dataTables_wrapper .dataTables_length,
        .dataTables_wrapper .dataTables_filter,
        .dataTables_wrapper .dataTables_info,
        .dataTables_wrapper .dataTables_processing,
        .dataTables_wrapper .dataTables_paginate {
            float: left;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.current,
        .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover,
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            color: #333 !important;
            border: none;
            background-color: none;
            background: none;
            background: white !important;
            border: 1px solid #333 !important;
            padding: 15px 20px;
            color: #333 !important;
            font-weight: 900
        }

        table.dataTable.no-footer {
            border: none;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            border: none;
            color: #333 !important;
            padding: 0;
            background-color: none;
            background: none !important;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button,
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            background: white !important;
            border: 1px solid #f1f4f8 !important;
            padding: 15px 20px;
            color: #a7a8a8 !important;
            font-weight: 900
        }

        .dataTables_paginate {
            margin: 25px 25px 25px 0;
        }
    </style>
</head>

<style>
    .btn-white:hover,
    .btn-white:not(:disabled):not(.disabled).active,
    .btn-white:not(:disabled):not(.disabled):active,
    .show>.btn-white.dropdown-toggle {
        color: rgb(163, 187, 194) !important;
    }

    .btn-white {
        color: rgb(141, 158, 163)
    }
</style>

<body class="bg-gray-200">

    @yield('content')

</body>

</html>

<!-- JAVASCRIPT
    ================================================== -->
<!-- Libs JS -->
<script type="text/javascript" src="{{ url('libs/jquery/dist/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ url('libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script type="text/javascript" src="{{ url('libs/flickity/dist/flickity.min.js') }}"></script>
<script type="text/javascript" src="{{ url('libs/flickity-fade/flickity-fade.js') }}"></script>
<script type="text/javascript" src="{{ url('libs/aos/dist/aos.js') }}"></script>
<script type="text/javascript" src="{{ url('libs/smooth-scroll/dist/smooth-scroll.min.js') }}"></script>
<script type="text/javascript" src="{{ url('libs/jarallax/dist/jarallax.min.js') }}"></script>
<script type="text/javascript" src="{{ url('libs/jarallax/dist/jarallax-video.min.js') }}"></script>
<script type="text/javascript" src="{{ url('libs/jarallax/dist/jarallax-element.min.js') }}"></script>
<script type="text/javascript" src="{{ url('libs/typed.js/lib/typed.min.js') }}"></script>
<script type="text/javascript" src="{{ url('libs/countup.js/dist/countUp.min.js') }}"></script>
<script type="text/javascript" src="{{ url('libs/highlightjs/highlight.pack.min.js') }}"></script>
<script type="text/javascript" src="{{ url('libs/@fancyapps/fancybox/dist/jquery.fancybox.min.js') }}"></script>
<script type="text/javascript" src="{{ url('libs/isotope-layout/dist/isotope.pkgd.min.js') }}"></script>
<script type="text/javascript" src="{{ url('libs/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>


<!-- Map -->
<script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>

<!-- Theme JS -->
<script type="text/javascript" src="{{ url('js/theme.min.js') }}"></script>

<!-- DataTables -->
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready( function () {
  var table = $('.table').DataTable({
    // "pagingType": "simple",
    "language": {
        search: '<i class="fa fa-filter" aria-hidden="true"></i>',
        searchPlaceholder: 'Zoek...',
        "paginate": {
          "previous": "<",
          "next": ">"
        },
        zeroRecords: "<p class='text-muted mb-6 mb-md-0'>Niet gevonden wat je zocht? <br> Probeer het nog eens, met minder filters. <br> Of kom over een paar dagen nog eens terug.</p>"

    },
    "bPaginate": true,
    "bLengthChange": false,
    "bFilter": true,
    "bInfo": false,
    "bAutoWidth": true
  });




 $('input:checkbox').on('change', function () {
  // Branche filter
   var industries = $('input:checkbox[name="industry"]:checked').map(function() {
     return '^' + this.value + '$';
   }).get().join('|');
  //  Filter results
   table.column(0).search(industries, true, false, false).draw(false);

  //  Functie filter
  var employment_functions = $('input:checkbox[name="employment_function"]:checked').map(function() {
     return '^' + this.value + '$';
   }).get().join('|');
  //  Filter results
   table.column(1).search(employment_functions, true, false, false).draw(false);

  //  Dienstverband filter
  var employments = $('input:checkbox[name="employment"]:checked').map(function() {
     return '^' + this.value + '$';
   }).get().join('|');
  //  Filter results
   table.column(2).search(employments, true, false, false).draw(false);

  //  Opleidingsniveau filter
  var educations = $('input:checkbox[name="education"]:checked').map(function() {
     return '^' + this.value + '$';
   }).get().join('|');
  //  Filter results
   table.column(3).search(educations, true, false, false).draw(false);

 });

} );



</script>
