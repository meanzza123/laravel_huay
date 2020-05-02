<head>
    <style>
        .active{
            background-color: #e14eca;
        }
        </style>
</head>
<div class="col-md-3">
    <div class="card">
        <div class="card-header">
            Menu Admin
        </div>

        <div class="card-body">
            <ul class="nav" role="tablist">
            <a href="{{ url('/admin') }}" style="color:white;width: 100%;">
                    <li style="">
                        Dashboard
                    </li>
                </a>
                <a href="{{ url('/admin/members') }}" style="color:white;width: 100%;">
                    <li style=""class="active">
                        Member
                    </li>
                </a>
                <a href="{{ url('/admin/payments') }}" style="color:white;width: 100%;">
                    <li style="">
                        Payment
                    </li>
                </a>
                <a href="{{ url('/admin/addtime') }}" style="color:white;width: 100%;">
                    <li style="">
                        Addtime
                    </li>
                </a>
                <a href="{{ url('/admin/packages') }}" style="color:white;width: 100%;">
                    <li style="">
                        Packages
                    </li>
                </a>
            </ul>
        </div>
    </div>
</div>
