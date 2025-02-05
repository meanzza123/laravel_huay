@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row">
        @include('admin.sidebar')

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">ข้อมูล การจ่ายเงิน</div>
                <div class="card-body">

                <div class="btn-group" role="group" aria-label="Basic example">
                <form method="GET" action="{{ url('/admin/payments') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                        <div class="input-group" style="padding: 2px; margin: 1px; ">
                            <span class="input-group-append">
                                <button class="btn btn-secondary btn-sm" type="submit" style="color:orange!important;">
                                <i class="tim-icons icon-alert-circle-exc"></i> 
                                    pending
                                </button>
                            </span>
                        </div>
                    </form>
                    <form method="GET" action="{{ url('/admin/payments') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                        <div class="input-group" style="padding: 2px;margin: 1px; ">
                            <input type="text" class="form-control" name="actived" placeholder="Search..." value="actived" hidden>
                            <span class="input-group-append">
                                <button class="btn btn-secondary btn-sm" type="submit" style="color:green!important;">
                                <i class="tim-icons  icon-check-2"></i>
                                   active
                                </button>
                            </span>
                        </div>
                    </form>
</div>




                    <form method="GET" action="{{ url('/admin/payments') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                            <span class="input-group-append">
                                <button class="btn btn-secondary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>

                    <br />
                    <br />
                    <div class="table-responsive">
                        <table class="table">
                            <thead style="font-weight: bold;">
                                <tr>
                                    <th>#</th>
                                    <th>ชื่อ</th>
                                    <th>เบอร์โทรศัพท์</th>
                                    <th>แพ็กเกจ</th>
                                    <th>สถานะ</th>
                                    <th>เวลาที่เติม</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($payments as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->tel }}</td>
                                    <td>{{ $item->package }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>{{ $item->created_at}}</td>
                                    <td>
                                        <a href="{{ url('/admin/payments/' . $item->id) }}" title="View payment"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                        {{-- <a href="{{ url('/admin/payments/' . $item->id . '/edit') }}" title="Edit payment"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                        <form method="POST" action="{{ url('/admin/payments' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete payment" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                        </form> --}}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination-wrapper"> {!! $payments->appends(['search' => Request::get('search')])->render() !!} </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection