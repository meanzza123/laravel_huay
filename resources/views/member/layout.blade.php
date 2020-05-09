<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <title>
        สูตรหวย
    </title>
    <!--     Fonts and icons     -->

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="{{ URL::asset('/assets/css/nucleo-icons.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/assets/js/project.js') }}" rel="script">
    <!-- CSS Files -->
    <link href="{{ URL::asset('/assets/css/blk-design-system.css?v=1.0.0') }}" rel="stylesheet">
    <link href="{{ URL::asset('/assets/demo/demo.css') }}" rel="stylesheet">
</head>


<body class="index-page">
    <div id="app">
        <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " style="background: darkslateblue!important;">
            <div class="container">
                <div class="navbar-translate">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <span>สูตรหวย •</span> โอกาศชนะสูง
                    </a>
                    <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <div class="navbar-collapse-header">
                        <div class="row">
                            <div class="col-6 collapse-close text-right ">
                                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                                    <i class="tim-icons icon-simple-remove"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="btn btn-lg nav-link text-justify" style="width:160px;  padding:20px;margin:auto;    display: block;margin-top: 10px;" href="{{ route('login') }}"> <i class="tim-icons icon-single-02"></i>{{ __('เข้าสู่ระบบ') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="btn btn-lg  nav-link text-justify" style="width:160px; padding:20px;margin:auto;    display: block;margin-top: 10px;" href="{{ route('register') }}"> <i class="tim-icons icon-badge"></i> {{ __('สมัครสมาชิก') }}</a>
                        </li>
                        @endif @else
                        
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <section style="padding-top: 20vh;">
            <main class="py-4">
                @yield('content')
            </main>
        </section>



    </div>
    <!--   Core JS Files   -->

    <script type="text/javascript" src="{{ URL::asset('/assets/js/core/jquery.min.js') }}" defer></script>
    <script type="text/javascript" src="{{ URL::asset('/assets/js/core/popper.min.js') }}" defer></script>
    <script type="text/javascript" src="{{ URL::asset('/assets/js/core/bootstrap.min.js') }}" defer></script>
    <script type="text/javascript" src="{{ URL::asset('/assets/js/plugins/perfect-scrollbar.jquery.min.js') }}" defer></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script type="text/javascript" src="{{ URL::asset('/assets/js/plugins/bootstrap-switch.js') }}" defer></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script type="text/javascript" src="{{ URL::asset('/assets/js/plugins/nouislider.min.js') }}" defer></script>
    <!-- Chart JS -->
    <script type="text/javascript" src="{{ URL::asset('/assets/js/plugins/chartjs.min.js') }}" defer></script>
    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
    <script type="text/javascript" src="{{ URL::asset('/assets/js/plugins/moment.min.js') }}" defer></script>
    <script type="text/javascript" src="{{ URL::asset('/assets/js/plugins/bootstrap-datetimepicker.js') }}" defer></script>
    <!-- Black Dashboard DEMO methods, don't include it in your project! -->
    <script type="text/javascript" src="{{ URL::asset('/assets/demo/demo.js') }}" defer></script>
    <!-- Control Center for Black UI Kit: parallax effects, scripts for the example pages etc -->
    <script type="text/javascript" src="{{ URL::asset('/assets/js/blk-design-system.min.js?v=1.0.0') }}" defer></script>


    <script type="text/javascript">
        function scrollToDownload() {
            if ($('.section-download').length != 0) {
                $("html, body").animate({
                    scrollTop: $('.section-download').offset().top
                }, 1000);
            }
        }
    </script>
</body>

</html>
