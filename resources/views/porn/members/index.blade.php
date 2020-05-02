@extends('admin.layout')
@section('content')
<div class="container">
    <div class="row">
        @include('admin.sidebar')

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">ข้อมูล สมาชิก</div>
                <div class="card-body">
                    {{-- <a href="{{ url('/admin/members/create') }}" class="btn btn-success btn-sm" title="Add New member">
                    <i class="fa fa-plus" aria-hidden="true"></i> เพิ่มสมาชิก
                    </a> --}}

                    <form method="GET" action="{{ url('/admin/members') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ชื่อ</th>
                                    <th>เบอร์โทรศัพท์</th>
                                    <th>ระยะเวลาสมาชิก</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($members as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->time }}</td>
                                    <td>
                                        <a href="{{ url('/admin/members/' . $item->id) }}" title="View member"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                        <a href="{{ url('/admin/members/' . $item->id . '/edit') }}" title="Edit member"><button class="btn btn-primary btn-sm"><i class="tim-icons icon-pencil" aria-hidden="true"></i> Edit</button></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination-wrapper"> {!! $members->appends(['search' => Request::get('search')])->render() !!} </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

