@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row">
        @include('admin.sidebar')

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">แพ็คเกจ {{ $package->title }}</div>
                <div class="card-body">

                    <a href="{{ url('/admin/packages') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                    <a href="{{ url('/admin/packages/' . $package->id . '/edit') }}" title="Edit package"><button class="btn btn-primary btn-sm"><i class="tim-icons icon-pencil" aria-hidden="true"></i> Edit</button></a>

                    <form method="POST" action="{{ url('admin/packages' . '/' . $package->id) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" title="Delete package" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="tim-icons icon-trash-simple" aria-hidden="true"></i> Delete</button>
                    </form>
                    <br />
                    <br />

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $package->id }}</td>
                                </tr>
                                <tr>
                                    <th> แพ็คเกจ </th>
                                    <td> {{ $package->title }} </td>
                                </tr>
                                <tr>
                                    <th> จำนวนวัน </th>
                                    <td> {{ $package->days }} </td>
                                </tr>
                                <tr>
                                    <th> Status </th>
                                    <td> {{ $package->status }} </td>
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