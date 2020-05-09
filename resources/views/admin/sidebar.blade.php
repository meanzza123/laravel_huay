
<div class="col-md-3">
    <div class="card">
        <div class="card-header">
            Menu Admin
        </div>

        <div class="card-body">
            <ul class="nav" role="tablist">
                <a href="{{ url('/admin') }}" class="btn " style="color:white;width: 100%;">
                    <li  class="{{ (request()->is('admin')) ? 'active' : '' }}">
                    <i class="tim-icons icon-app"></i>  Dashboard
                    </li>
                </a>
                <a href="{{ url('/admin/members') }}" class="btn " style="color:white;width: 100%;">
                    <li  class="{{ (request()->is('admin/members*')) ? 'active' : '' }}">
                    <i class="tim-icons icon-single-02"></i>  Member
                    </li> 
                </a>
                <a href="{{ url('/admin/payments') }}" class="btn " style="color:white;width: 100%;">
                    <li class="{{ (request()->is('admin/payments*')) ? 'active' : '' }}">
                    <i class="tim-icons icon-money-coins"></i>   Payment
                    </li>
                </a>
                <a href="{{ url('/admin/addtime') }}" class="btn " style="color:white;width: 100%;">
                    <li class="{{ (request()->is('admin/addtime*')) ? 'active' : '' }}">
                    <i class="tim-icons icon-time-alarm"></i>   Addtime
                    </li>
                </a>
                <a href="{{ url('/admin/packages') }}" class="btn " style="color:white;width: 100%;">
                    <li class="{{ (request()->is('admin/packages*')) ? 'active' : '' }}">
                    <i class="tim-icons icon-money-coins"></i>    Packages
                    </li>
                </a>
            </ul>
        </div>
    </div>
</div>