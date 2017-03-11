<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tempo Cepat - Member</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <!-- <link rel="stylesheet" href="{ {URL::asset('assets/stylesheets/bootstrap/dist/css/bootstrap.min.css')}}" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> -->
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <link rel="stylesheet" href="{{URL::asset('assets/stylesheets/AdminLTE/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/stylesheets/AdminLTE/plugins/datatables/dataTables.bootstrap.css')}}">

    <!-- <link rel="stylesheet" href="../../../../../../home/farooqa/Documents/templateproject/frontend-free/dist/assets/stylesheets/dashboard.css"> -->

    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/dashboard-member.css')}}">

    <!--  -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/dashboard-member-dashboard.css')}}">
    <!--  -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{URL::asset('assets/stylesheets/AdminLTE/bootstrap/css/font-awesome.min.css')}}">

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>

          <style>   

              #app-layout .navbar .container .navbar-collapse ul.nav li a{
                    align-items: center;
              }

            @media screen and (max-width:768px){

              .navbar-default .navbar-collapse, .navbar-default .navbar-form {
                    border-color: #222;
                    background: #222;
                }

              .navbar-collapse ul.nav li a{
                padding-top: 10px !important;
                padding-bottom: 10px !important;
              }

              #app-layout .navbar .container .navbar-header a.navbar-brand {
    margin: 10px 5%;
}


            }
            </style>
            
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ url('/dashboard/data') }}">Profile</a></li>
                    <!-- @ role('admin') -->
                    @if(Entrust::hasRole('admin'))
                    <li><a href="{{ route('admin.authors.index') }}">Authors</a></li>
                    @endif
                    <!-- @ endrole-->
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="{{URL::asset('assets/scripts/jquery/jquery.min.js')}}"></script>
    <script src="{{URL::asset('assets/scripts/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

    @yield('additional')

</body>
</html>