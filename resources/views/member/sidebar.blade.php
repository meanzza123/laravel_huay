<head>
    <style>
        .active {
            background-color: #e14eca;
        }
    </style>
</head>
<div class="col-md-3">
    <div class="card">
        <div class="card-header">
            Menu Member
        </div>

        <div class="card-body">
            <ul class="nav" role="tablist">
                <a href="{{ url('/admin') }}" style="color:white;width: 100%;">
                    <li>
                        Dashboard
                    </li>
                </a>
                <a href="{{ url('/admin/members') }}" style="color:white;width: 100%;">
                    <li class="{{ (request()->is('admin/members*')) ? 'active' : '' }}">
                        Memberss
                    </li>
                </a>
                <!-- <a href="{{ url('/admin/payments') }}" style="color:white;width: 100%;">
                    <li class="{{ (request()->is('admin/payments*')) ? 'active' : '' }}">
                        Payment
                    </li>
                </a>
                <a href="{{ url('/admin/addtime') }}" style="color:white;width: 100%;">
                    <li class="{{ (request()->is('admin/addtime*')) ? 'active' : '' }}">
                        Addtime
                    </li>
                </a>
                <a href="{{ url('/admin/packages') }}" style="color:white;width: 100%;">
                    <li class="{{ (request()->is('admin/packages*')) ? 'active' : '' }}">
                        Packages
                    </li>
                </a> -->
            </ul>
        </div>
    </div>
</div>