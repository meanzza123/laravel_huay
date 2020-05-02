@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row">
        @include('admin.sidebar')

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">ข้อมูล การจ่ายเงิน</div>
                <div class="card-body">

                    <a href="{{ url('/admin/payments') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                    <button class="btn btn-primary  btn-sm float-sm-right" data-toggle="modal" data-target="#myModal">
                    <i class="tim-icons icon-time-alarm"></i> เพิ่มเวลา
                    </button>
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
                                    <td> แพ็คเกจ </td>
                                    <td> {{ $payment->package }} </td>
                                </tr>
                                <tr>


                                    <td> รูป</td>
                                    <td> {{ $payment->image }} </td>
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


<!-- Sart Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center" style="background-color:lightsalmon;padding: 15px;">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="tim-icons icon-simple-remove"></i>
                </button>
                <h4 class="title title-up" style="color:white;">เพิ่มเวลาสมาชิก</h4>
            </div>
            <div class="modal-body">
                <div class="table-responsive">

                <form method="POST" action="{{ url('/admin/addtime') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                            <label for="name" class="control-label">{{ 'ชื่อ' }}</label>
                            <input class="form-control" name="name" type="text" id="name" value="{{ isset($payment->name) ? $payment->name : ''}}">
                        </div>
                        <div class="form-group {{ $errors->has('tel') ? 'has-error' : ''}}">
                            <label for="tel" class="control-label">{{ 'เบอร์โทรศัพท์' }}</label>
                            <input class="form-control" name="tel" type="text" id="tel" value="{{ isset($payment->tel) ? $payment->tel : ''}}">
                        </div>
                        <div class="form-group {{ $errors->has('package') ? 'has-error' : ''}}">
                            <label for="package" class="control-label">{{ 'แพ็คเกจที่สมาชิกเลือก' }}</label>
                            <select name="package" class="form-control" >
                                @foreach (json_decode('{"90": "90", "150": "150", "300": "300"}', true) as $optionKey => $optionValue)
                                <option value="{{ $optionKey }}" {{ (isset($payment->package) && $payment->package == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
                                @endforeach
                            </select>
                            {!! $errors->first('package', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="form-group {{ $errors->has('time') ? 'has-error' : ''}}">
                            <label for="time" class="control-label">{{ 'แพ็คเกจเพิ่มให้สมาชิก' }}</label>
                            <select name="time" class="form-control" id="time">
                                @foreach ($packages as $package)
                                <option value="{{ $package->days }}" }}>{{ $package->title }} เพิ่ม {{ $package->days }} วัน</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="modal-footer">
                            <input class="btn btn-primary  btn-sm" type="submit" value="{{ $formMode ='Create' }}">
                            <button type="button" class="btn btn-sm" data-dismiss="modal" style="background-color: #6c757d; color:white;">Cancle</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<!--  End Modal -->