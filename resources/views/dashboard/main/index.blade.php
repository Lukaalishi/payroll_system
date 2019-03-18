@extends('layouts.main')

@section('content')
    {{--<!------ Include the above in your HEAD tag ---------->--}}

    <div id="throbber" style="display:none; min-height:120px;"></div>
    <div id="noty-holder"></div>
    <body class="fixed-left">
    <div id="wrapper">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
    @endif
    <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="sidebar">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="ic on-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://cijulenlinea.ucr.ac.cr/dev-users/">
                    <img src="{{ asset('udo.png') }}" alt="LOGO" width="50px" height="50px" class="img-fluid">
                </a>
            </div>
            <!-- Top Menu Items -->

            <ul class="nav navbar-right top-nav">
                {{--<ul class="nav navbar-nav top-nav">--}}
                {{--<li><a href="#">Payroll Management System (PMS)</a></li>--}}
                {{--<li><a href="#" class="t">Payroll Management System (PMS)</a></li>--}}
                {{--</ul>--}}
                <li><a href="#" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Stats"><i
                                class="fa fa-bar-chart-o"></i>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{{ Auth::user()->username }}} <b
                                class="fa fa-angle-down"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="fa fa-fw fa-user"></i> Edit Profile</a></li>
                        <li><a href="#"><i class="fa fa-fw fa-cog"></i> Change Password</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ route('logout') }}"
                               onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="nav-side-menu" id="nav_s">
                <div class="menu-list">
                    <ul class="nav navbar-nav side-nav">
                        <li>
                            <a href="javascript:void(0);"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                        </li>
                        {{--employee................................--}}
                        <li>
                            <a href="#" data-toggle="collapse" data-target="#submenu-1" aria-expanded="true"
                               class="dropdown-toggle"><i class="fas fa-user-friends"></i> Employee<i
                                        class="fa fa-fw fa-angle-down pull-right"></i></a>
                            <ul id="submenu-1" class="collapse">
                                <li><a href="{{route('employees.index')}}" data-target="list" id="employees_list" class="link"><i class="fas fa-list-ul"></i> Employee List</a></li>
                                <li><a href="{{route('employees.create')}}" data-target="employee_create" class="link"><i class="fas fa-user-plus"></i> Create Employee</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#" data-toggle="collapse" data-target="#submenu-2"><i class="fas fa-briefcase"></i>
                                Department<i class="fa fa-fw fa-angle-down pull-right"></i></a>
                            <ul id="submenu-2" class="collapse">
                                <li><a href="#" class="link"><i class="fas fa-plus-circle"></i> Create Department</a></li>
                                <li><a href="#" class="link"><i class="fas fa-list-alt"></i> List Department</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" data-toggle="collapse" data-target="#submenu-3"><i class="far fa-chart-bar"></i>
                                Attendance<i class="fa fa-fw fa-angle-down pull-right"></i></a>
                            <ul id="submenu-3" class="collapse">
                                <li><a href="#" class="link"><i class="fa fa-angle-double-right"></i> SUBMENU 1.1</a></li>
                                <li><a href="#" class="link"><i class="fa fa-angle-double-right"></i> SUBMENU 1.2</a></li>
                                <li><a href="#" class="link"><i class="fa fa-angle-double-right"></i> SUBMENU 1.3</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" data-toggle="collapse" data-target="#submenu-4"><i class="fas fa-handshake"></i>
                                Payroll<i class="fa fa-fw fa-angle-down pull-right"></i></a>
                            <ul id="submenu-4" class="collapse">
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.1</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.2</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.3</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" data-toggle="collapse" data-target="#submenu-6"><i class="fas fa-plane"></i>
                                Leave<i class="fa fa-fw fa-angle-down pull-right"></i></a>
                            <ul id="submenu-6" class="collapse">
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.1</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.2</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.3</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" data-toggle="collapse" data-target="#submenu-5"><i
                                        class="fas fa-clipboard-list"></i>
                                Allowance <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                            <ul id="submenu-5" class="collapse">
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 2.1</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 2.2</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 2.3</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" data-toggle="collapse" data-target="#submenu-8"><i
                                        class="fas fa-clipboard-list"></i>
                                Reports <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                            <ul id="submenu-8" class="collapse">
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 2.1</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 2.2</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 2.3</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="investigaciones/favoritas"><i class="far fa-envelope"></i> Message</a>
                        </li>
                        <li>
                            <a href="#" data-toggle="collapse" data-target="#submenu-7"><i class="fas fa-cog"></i>
                                Settings <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                            <ul id="submenu-7" class="collapse">
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 2.1</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 2.2</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 2.3</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="faq"><i class="far fa-user-circle"></i> Account</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">
            <div class="container-fluid" id="container_main">
            {{--@include('dashboard.employee.index')--}}
            <!-- Page Heading -->
                <div class="row" id="main">
                    <div class="col-sm-12 col-md-12 well" id="content">
                        {{--{{ Auth::user()->id }}--}}
                        <h2>Payroll Management System (PMS) </h2>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div><!-- /#wrapper -->
    </body>
@endsection

