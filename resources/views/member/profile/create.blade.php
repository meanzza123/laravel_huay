<?
date_default_timezone_set("Asia/Bangkok");
// $datetime1 = new DateTime('2020-05-03 00:26:05');
// $datetime2 = new DateTime('2020-05-04 00:26:05');
// $datetime = new DateTime();
// $text = 5;
// $num1 = '+'.$text.'day';
// // echo $num1;
// $datetime1->modify($num1);
// $time1 = $datetime1->format('Y-m-d H:i:s');
// $time2 = $datetime2->format('Y-m-d H:i:s');
// // $time2 = $datetime2->format('Y-m-d H:i:s');
// // $time3 = $datetime->format('Y-m-d H:i:s');
// // echo $time3,"<br>";
// // echo $time1,"<br>";
// // echo $time2,"<br>";
// // echo $time2,"<br>";
// if ($time2 > $time1)
// {
//    echo 'here';
// }
$timeff = '2020-05-05 00:26:05';
$paymentDate = strtotime(date("Y-m-d H:i:s"));
$datetime1 = strtotime(date($timeff));
$datetime2 = strtotime(date('2020-05-04 00:26:05'));

echo $time = date("Y-m-d H:i:s",$datetime2);
// echo $paymentDate;

if ($datetime1 > $datetime2)
{
   echo 'here';
}
?>






{{-- @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">เพิ่ม สมาชิก</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/members') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/admin/members') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('porn.members.form', ['formMode' => 'create'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}
