<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="{{ comInfo('avatar')->url }}" type="image/x-icon">
    <title>Creation IT</title>
    <link href="{{ asset('assets/css/bootstrap4.min.css') }}" rel="stylesheet" crossorigin="anonymous" />
    <link href="/assets/css/style.css" rel="stylesheet" />
    <link href="{{ asset('assets/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" crossorigin="anonymous" />

    <link href="/assets/css/theme.css" rel="stylesheet" />
    <link href="/assets/css/typography.css" rel="stylesheet" />
    <script src="{{ asset('assets/js/font-awesome/5.13.0/js/all.min.js') }}" crossorigin="anonymous"></script>

    <style>
  
    </style>
    @isset($style)
        {{ $style }}
    @endisset

</head>

<body class="sb-nav-fixed">


    <nav class="sb-topnav navbar navbar-expand navbar-light bg-light">

        <a class="navbar-brand" href="/"> <img src="{{ comInfo('avatar')->url }}" alt="" class="thumb-sm">
        </a>
        <button class="btn btn-link btn-md order-1 order-lg-0 sidebar-btn" id="sidebarToggle"><i
                class="fas fa-bars"></i></button>

        <div
            class="form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0 d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

        </div>

        <!-- Navbar Search-->

        <!-- Navbar-->

        <form action="{{ route('logout') }}" method="post" id="logoutForm">
            @csrf

        </form>

        <ul class="navbar-nav" style="align-items:center;">


            @auth()
                @can('view', auth()->user())
                    <li
                        class="nav-item dropdown nav-item d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-1 my-2 my-md-0">
                        <a class="nav-link dropdown-toggle" id="useIno" href="#" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"> ‍<div
                                class=" d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-q my-2 my-md-0"> </div> <i
                                class="fas fa-info-circle"></i>
                            <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0"> Info</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="useIno">

                            {{-- <a class="nav-link" href="#"> Change Logo </a> --}}
                            <a class="nav-link" href="{{ route('message.smsInfo') }}"> SMS Balance </a>
                            {{-- <a class="nav-link" href="#"> Expiretion </a>
			<a class="nav-link" href="#"> Tutorials </a> --}}

                        </div>
                    </li>


                    <li
                        class="nav-item dropdown nav-item d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-1 my-2 my-md-0">
                        <a class="nav-link dropdown-toggle" id="systemDropdown" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> ‍
                            <div class=" d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-q my-2 my-md-0"> </div> <i
                                class="fas fa-sliders-h"></i>
                            <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0"> Settings </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="systemDropdown">


                            <a class="nav-link" href="{{ route('viewSetting') }}"> System Info</a>
                            <a class="nav-link" href="{{ route('option.index') }}"> Option</a>

                        </div>
                    </li>
                @endcan
            @endauth


            <li class="nav-item dropdown">

                @auth()
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ auth()->user()->avatar->url }}" alt="" class="thumb-profile mr-2">
                        <div class=" d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                            {{ auth()->user()->name }} </div>
                    </a>
                @endauth
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="{{ route('authInfo') }}"> User Profile</a>
                    <a class="dropdown-item" href="{{ route('resetPassword') }}">Change Password</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"
                        onclick="document.getElementById('logoutForm').submit()">Logout</a>
                </div>
            </li>
            <li class="nav-item  d-none d-md-inline-block">
                <a class="btn btn-info btn-sm " href="{{ route('clear') }}">Cache Clear</a>
            </li>
        </ul>


    </nav>
    <div id="layoutSidenav">
        @component('components.sideBar') @endcomponent
        <div id="layoutSidenav_content">

            {{ $slot }}

        </div>
    </div>



    <script src="/assets/js/sweetalert.js"></script>
    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
    <script src="/assets/js/scripts.js"></script>
    @isset($script)
        {{ $script }}
    @endisset

</body>


</html>
