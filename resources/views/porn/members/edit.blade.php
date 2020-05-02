@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row">
        @include('admin.sidebar')

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">แก้ไข สมาชิก {{ $member->name }}</div>
                <div class="card-body">
                    <a href="{{ url('/admin/members') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                    <button class="btn btn-primary  btn-sm float-sm-right" data-toggle="modal" data-target="#myModal">
                    <i class="tim-icons icon-refresh-02"></i> รีเซ็ทเวลา
                    </button>
                    <br />
                    <br />

                    @if ($errors->any())
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif
                    
                    <form method="POST" action="{{ url('/admin/members/' . $member->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}

                        @include ('porn.members.form', ['formMode' => 'edit'])

                    </form>

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
            <div class="modal-header justify-content-center">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="tim-icons icon-simple-remove"></i>
                </button>
                <h4 class="title title-up">รีเซ็ทเวลา</h4>
            </div>
            <div class="modal-body">
                <div class="table-responsive">

                    <form method="POST" action="{{ url('/admin/members/' . $member->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}
                        <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                            <label for="name" class="control-label">{{ 'ชื่อ' }}</label>
                            <input class="form-control" name="name" type="text" id="name" value="{{ isset($member->name) ? $member->name : ''}}">
                        </div>
                        <div class="form-group {{ $errors->has('tel') ? 'has-error' : ''}}">
                            <label for="email" class="control-label">{{ 'เบอร์โทรศัพท์' }}</label>
                            <input class="form-control" name="email" type="text" id="email" value="{{ isset($member->email) ? $member->email : ''}}">
                            <input class="form-control" name="reset" type="text" id="reset" value="reset">
                        </div>
                        <div class="modal-footer">
                            <input class="btn btn-primary" type="submit" value="{{ $formMode ='รีเซ็ทเวลา' }}">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancle</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<!--  End Modal -->