@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row">
        @include('admin.sidebar')

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">ข้อมูลเพิ่มเวลา</div>
                <div class="card-body">

                    <a href="{{ url('/admin/addtime') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                    <form method="POST" action="{{ url('admin/addtime' . '/' . $addtime->id) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" title="Delete addtime" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="tim-icons icon-trash-simple" aria-hidden="true"></i> Delete</button>
                    </form>
                    <br />
                    <br />

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $addtime->id }}</td>
                                </tr>
                                <tr>
                                    <th> ชื่อ </th>
                                    <td> {{ $addtime->name }} </td>
                                </tr>
                                <tr>
                                    <th> เบอร์โทรศัพท์ </th>
                                    <td> {{ $addtime->tel }} </td>
                                </tr>
                                <tr>
                                    <th> จำนวนวันที่เพิ่ม </th>
                                    <td> {{ $addtime->time }} </td>
                                </tr>
                                <tr>
                                    <th> วันที่เพิ่ม </th>
                                    <td> {{ $addtime->created_at }} </td>
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
