@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row">
        @include('admin.sidebar')

        <div class="col-md-9">
            <div class="card">
                <div class="card-header"> {{ $member->name }}</div>
                <div class="card-body">

                    <a href="{{ url('/admin/members') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                    <a href="{{ url('/admin/members/' . $member->id . '/edit') }}" title="Edit member"><button class="btn btn-primary btn-sm"><i class="tim-icons icon-pencil" aria-hidden="true"></i> Edit</button></a>
                  
                    <br />
                    <br />

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>ชื่อ </td>
                                    <td> {{ $member->name }} </td>
                                </tr>
                                <tr>
                                    <td>เบอร์โทรศัพท์ </td>
                                    <td> {{ $member->email }} </td>
                                </tr>
                                <tr>
                                    <td>ระยะเวลาสมาชิก </td>
                                    <td> {{ $member->time }} </td>
                                </tr>
                                <tr>
                                    <td>สถานะสมาชิก </td>
                                    <td> {{ $member->status }} </td>
                                </tr>
                                <tr>
                                    <td>ระดับ </td>
                                    <td> {{ $member->type }} </td>
                                </tr>
                                <tr>
                                    <td>วันที่สมัคร </td>
                                    <td> {{ $member->created_at }} </td>
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



