@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">ข้อมูลเพิ่มเวลา</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/addtime/create') }}" class="btn btn-success btn-sm" title="Add New addtime">
                            <i class="fa fa-plus" aria-hidden="true"></i> เพิ่มเวลา
                        </a>

                        <form method="GET" action="{{ url('/admin/addtime') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                        <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>ชื่อ</th><th>เบอร์โทรศัพท์</th><th>เวลาที่เพิ่ม</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($addtime as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td><td>{{ $item->tel }}</td><td>{{ $item->time }}</td>
                                        <td>
                                            <a href="{{ url('/admin/addtime/' . $item->id) }}" title="View addtime"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
        
                                            <form method="POST" action="{{ url('/admin/addtime' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete addtime" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="tim-icons icon-trash-simple" aria-hidden="true"></i> Delete</button>
                                            </form> 
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $addtime->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
