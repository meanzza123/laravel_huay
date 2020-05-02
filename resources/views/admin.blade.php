@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row">
        @include('admin.sidebar')

        <div class="col-md-9">

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
                                <canvas id="lineChartExample"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection

<script type="text/javascript" src="{{ URL::asset('/assets/js/plugins/chartjs.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('/assets/js/core/jquery.min.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
        demo.initLandingPageChart();
        demo.initDocChart();
    });
</script>