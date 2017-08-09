<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- jQuery -->
        <script src="{{ asset('js/jquery/dist/jquery.min.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('js/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <!-- Skycons -->
        <script src="{{ asset('js/skycons/skycons.js') }}"></script>   
        <!-- DataTables -->
        <script src="{{ asset('js/datatable/jquery.dataTables.min.js') }}"></script>  
        {{-- comun.js, para funciones comunes --}}
        <script src="{{asset('js/comun/comun.js')}}"></script>
        {{-- Título General --}}
        <title>Grupo ASD</title>

        <!-- Bootstrap -->
        <link href="{{ asset('css/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        
        <!-- bootstrap-daterangepicker -->
        <link href="{{ asset('css/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="{{ asset('css/custom.min.css') }}" rel="stylesheet">
    </head>
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                @include('layouts.partials._navigation')
            
                @include('layouts.partials._header')
            
                <!-- page content -->
                <div class="right_col" role="main" style="padding-top:100px;">
                    @yield('content')
                </div>           
                <!-- /page content -->
            
                @include('layouts.partials._footer')
            </div>
        </div>
        <!-- Custom Theme Scripts -->
        <script src="{{ asset('js/custom.min.js') }}"></script>
        @stack('scripts')
    </body>
</html>