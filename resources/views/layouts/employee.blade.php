<!doctype>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{config('app.name','Payroll Management System')}} | Employee</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">
    {{--<link href="{{ asset('css/custom.css')}}" rel="stylesheet">--}}
    <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/all.js')}}"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src=https://cdn.datatables.net/1.10.19/js/dataTables.jqueryui.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.jqueryui.min.css">
    {{--new for data table--}}
    {{--<link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css">--}}
    {{--<link href="https://cdn.datatables.net/1.10.19/css/dataTables.material.min.css">--}}
    {{--<script src="https://code.jquery.com/jquery-3.3.1.js"></script>--}}
    {{--<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>--}}
    {{--<script src="https://cdn.datatables.net/1.10.19/js/dataTables.material.min.js"></script>--}}
<style>
    div.dataTables_wrapper {
        width: 800px;
        margin: 0 auto;
    }
</style>


    <script type="text/javascript">
        $(document).ready(function () {
            $('#example').DataTable({
                scrollY:        true,
                scrollCollapse: true,
                paging:         true,
                scrollX: true
            });

        });
    </script>
</head>
<body>
<div>
    @include('dashboard.inc.message')
    @yield('content')
</div>
{{--@include('dashboard.inc.footer')--}}
</body>
</html>