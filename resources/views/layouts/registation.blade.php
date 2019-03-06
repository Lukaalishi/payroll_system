<!doctype>
<html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{config('app.name','Payroll Management System')}} | Auth</title>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <link href="{{ asset('css/custom.css')}}" rel="stylesheet">
    <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/all.js')}}"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <!--Import Google Icon Font-->
{{--<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">--}}
<!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Compiled and minified CSS -->
{{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">--}}
<!-- Compiled and minified JavaScript -->
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>--}}
    <style>

        html,
        body {
            height: 100%;
        }

        .form-signin .form-control:focus {
            z-index: 2;
        }
    </style>
</head>
<body>
<div class="container">
    @include('dashboard.inc.message')
    @yield('content')
</div>
@include('dashboard.inc.footer')
</body>
</html>