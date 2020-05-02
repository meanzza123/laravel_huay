<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
                        <div class="col-6 collapse-close text-right">
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="tim-icons icon-simple-remove"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav">
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="btn btn-lg nav-link text-justify" style="width:160px;  padding:20px;margin:auto;    display: block;" href="{{ route('login') }}"> <i class="tim-icons icon-single-02"></i> {{ __('เข้าสู่ระบบ') }}</a>

                    </li>


                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="btn btn-lg  nav-link text-justify" style="width:160px; padding:20px;margin:auto;    display: block;" href="{{ route('register') }}"> <i class="tim-icons icon-badge"></i> {{ __('สมัครสมาชิก') }}</a>
                    </li>
                    @endif @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
    <!-- End Navbar -->

    <div class="wrapper">
        <div class="page-header header-filter">
            <div class="squares square1"></div>
            <div class="squares square2"></div>
            <div class="squares square3"></div>
            <div class="squares square4"></div>
            <div class="squares square5"></div>
            <div class="squares square6"></div>
            <div class="squares square7"></div>
            <div class="content-center">
                <div class="row row-grid justify-content-between align-items-center text-left" style="box-shadow: 0 5px 5px -3px rgba(0, 0, 0, 0.2), 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12);
                padding:10px;border-radius:4px;">
                    <div class="col-12">


                        <h1 class="text-white">หวยยี่กี หวยจับยี่กี
                            <br />
                        </h1>

                        <p class="text-white mb-3">หวยยี่กี หวยจับยี่กี หรือ หวยปิงปอง การเล่นทายผลตัวเลข กำลังเป็นที่ชื่นชอบของกลุ่มคนเล่นหวยในเมืองไทย จุดเด่นของหวยยี่กี คือ เป็นการเล่นหวยที่สามารถเข้าเล่นได้หลายรอบต่อวัน เล่นง่าย รู้ผลเร็ว ได้เงินเร็ว</p>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <section class="section section-lg">
        <section class="section">
            <div class="container">
                <div class="row row-grid justify-content-between">
                    <div class="col-md-5 mt-lg-5">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12 px-2 py-2">
                                <div class="card card-stats ">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-5 col-md-4">
                                                <div class="icon-big text-center icon-warning">
                                                    <i class="tim-icons icon-trophy text-warning"></i>
                                                </div>
                                            </div>
                                            <div class="col-7 col-md-8">
                                                <div class="numbers">
                                                    <p class="card-title">99 %
                                                        <p>
                                                            <p class="card-category">โอกาศชนะ </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 px-2 py-2">
                                <div class="card card-stats upper bg-default">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-5 col-md-4">
                                                <div class="icon-big text-center icon-warning">
                                                    <i class="tim-icons icon-coins text-white"></i>
                                                </div>
                                            </div>
                                            <div class="col-7 col-md-8">
                                                <div class="numbers">
                                                    <p class="card-title">100 %
                                                        <p>
                                                            <p class="card-category"> การลงทุนที่คุ้มค่า</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-sm-12 px-2 py-2">
                                <div class="card card-stats ">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-5 col-md-4">
                                                <div class="icon-big text-center icon-warning">
                                                    <i class="tim-icons icon-gift-2 text-info"></i>
                                                </div>
                                            </div>
                                            <div class="col-7 col-md-8">
                                                <div class="numbers">
                                                    <p class="card-title">100 %
                                                        <p>
                                                            <p class="card-category">ระบบมีความมั่นคง</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 px-2 py-2">
                                <div class="card card-stats ">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-5 col-md-4">
                                                <div class="icon-big text-center icon-warning">
                                                    <i class="tim-icons icon-credit-card text-success"></i>
                                                </div>
                                            </div>
                                            <div class="col-7 col-md-8">
                                                <div class="numbers">
                                                    <p class="card-title">100 %
                                                        <p>
                                                            <p class="card-category">มีความน่าเชื่อถือ</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pl-md-5">
                            <h1>หมดปัญหา เล่นแล้วเสีย ?</h1>
                            <p>หมดปัญหากับการเล่น จับยี่กี่ แล้วเล่นเสียจนไม่ได้ถอน เพราะฉะนั้นแล้วในส่วนของสูตรนี้ทางเว็บ
                            </p>
                            <br />
                            <p>จะมาแนะนำให้กับทุกคน ได้ไปหากำไรจากการเล่นหวยยี่กี่แบบอย่างง่าย</p>
                            <br />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <section class="section section-lg">
        <div class="col-md-12">
            <div class="card card-chart card-plain">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <h2 class="card-title">ความพึงพอใจจาก ผู้ใช้งานสูตร</h2>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="chartBig"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-lg">
        <div class="container">
            <div class="row" style="margin-bottom: 15vh;">
                <div class="col-md-5">
                    <h3>มี แพ็กเกจ ให้สมาชิกได้เลือก
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-coin card-plain">
                        <div class="card-header">
                            <img class="img-center img-fluid" src="{{ URL::asset('/assets/img/bitcoin.png') }}" alt="">
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <h4 class="text-uppercase">Bronze</h4>
                                    <span>Plan</span>
                                    <hr class="line-primary">
                                </div>
                            </div>
                            <div class="row">
                                <ul class="list-group">
                                    <li class="list-group-item">90 บาท</li>
                                    <li class="list-group-item">5 วัน</li>
                                    <li class="list-group-item">บริการ ให้คำแนะนำ 24 ชั่วโมง</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <!-- <button class="btn btn-primary btn-simple">เลือก</button> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-coin card-plain">
                        <div class="card-header">
                            <img class="img-center img-fluid" src="{{ URL::asset('/assets/img/etherum.png') }}" alt="">
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <h4 class="text-uppercase">Silver</h4>
                                    <span>Plan</span>
                                    <hr class="line-success">
                                </div>
                            </div>
                            <div class="row">
                                <ul class="list-group">
                                    <li class="list-group-item">150 บาท</li>
                                    <li class="list-group-item">12 วัน</li>
                                    <li class="list-group-item">บริการ ให้คำแนะนำ 24 ชั่วโมง</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <!-- <button class="btn btn-success btn-simple">เลือก</button> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-coin card-plain">
                        <div class="card-header">
                            <img class="img-center img-fluid" src="{{ URL::asset('/assets/img/ripp.png') }}" alt="">
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <h4 class="text-uppercase">Gold</h4>
                                    <span>Plan</span>
                                    <hr class="line-info">
                                </div>
                            </div>
                            <div class="row">
                                <ul class="list-group">
                                    <li class="list-group-item">300 บาท</li>
                                    <li class="list-group-item">30 วัน</li>
                                    <li class="list-group-item">บริการ ให้คำแนะนำ 24 ชั่วโมง</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <!-- <button class="btn btn-info btn-simple">เลือก</button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="title">สูตรหวย • Copyright © 2015, JETSADABET All Rights Reserved.</h3>
                </div>
            </div>
        </div>
    </footer>

    <!--   Core JS Files   -->

    <script type="text/javascript" src="{{ URL::asset('/assets/js/core/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/assets/js/core/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/assets/js/core/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script type="text/javascript" src="{{ URL::asset('/assets/js/plugins/bootstrap-switch.js') }}"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script type="text/javascript" src="{{ URL::asset('/assets/js/plugins/nouislider.min.js') }}"></script>
    <!-- Chart JS -->
    <script type="text/javascript" src="{{ URL::asset('/assets/js/plugins/chartjs.min.js') }}"></script>
    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
    <script type="text/javascript" src="{{ URL::asset('/assets/js/plugins/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/assets/js/plugins/bootstrap-datetimepicker.js') }}"></script>
    <!-- Black Dashboard DEMO methods, don't include it in your project! -->
    <script type="text/javascript" src="{{ URL::asset('/assets/demo/demo.js') }}"></script>
    <!-- Control Center for Black UI Kit: parallax effects, scripts for the example pages etc -->
    <script type="text/javascript" src="{{ URL::asset('/assets/js/blk-design-system.min.js?v=1.0.0') }}"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
            demo.initLandingPageChart();
        });


        $(document).ready(function() {
            blackKit.initDatePicker();
            blackKit.initSliders();
        });

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
