@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('member.sidebar')

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">อัพโหลดข้อมูลการจ่ายเงิน</div>
                <div class="card-body">
                    <a href="{{ url('/main/payment') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                    <br />
                    <br />

                    @if ($errors->any())
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif

                    <form method="POST" action="{{ url('/main/payment/create') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        @include ('member.payment.form', ['formMode' => 'create'])

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script type="text/javascript" src="{{ URL::asset('/assets/js/core/jquery.min.js') }}"></script>




<script>
     var user = {!!Session::get('expireTime') !!};
    $(document).ready(function() {
        if (user = 1) {
            Swal.fire(
                'เวลาของท่านหมด',
                'กรุณาเติมเงิน',
                'warning'
            )
        }
    });
</script>