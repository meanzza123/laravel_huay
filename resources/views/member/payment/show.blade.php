@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('member.sidebar')
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">ข้อมูล การจ่ายเงิน</div>
                <div class="card-body">

                    <a href="{{ url('/main/payment/') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>

                    <br />
                    <br />

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td> ชื่อ</td>
                                    <td id="name"> {{ $payment->name }} </td>
                                </tr>
                                <tr>
                                    <td> เบอร์โทรศัพท์ </td>
                                    <td> {{ $payment->tel }} </td>
                                </tr>

                                <tr>
                                    <td> <button class="btn btn-primary  btn-sm" id="showImg" style="padding: 10px;">
                                        <i class="tim-icons icon-zoom-split"></i> zoom
                                    </button></td>
                                    
                                    <td> <img src="{{ asset($payment->image) }}" width="300px" height="300px" alt=""> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script type="text/javascript" src="{{ URL::asset('/assets/js/core/jquery.min.js') }}"></script>




<script>
    var user = {!! auth()-> user() !!};
    var sites = {!! json_encode($payment->toArray()) !!};
    
    $(document).ready(function() {
        $("#showImg").click(function() {

            Swal.fire({
  imageUrl: 'http://127.0.0.1:8000'+sites.image,
  imageHeight: 600,
  imageWidth: 600,
  imageAlt: 'A tall image'
})
            // Swal.fire(
            //     asset(sites.image),
            //     'Welcome ',
            //     'success'
            // )
            // alert("adasd");
            
        });
    });
</script>