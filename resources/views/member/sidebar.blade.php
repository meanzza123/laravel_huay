<div class="col-md-3">
    <div class="card">
        <div class="card-header">
            Menu Member
        </div>

        <div class="card-body">
            <ul class="nav" role="tablist">
                <a href="{{ url('/home') }}" class="btn " style="color:white;width: 100%;">
                    <li class="{{ (request()->is('home*')) ? 'active' : '' }}">
                    <i class="tim-icons icon-puzzle-10"></i>  สูตรหวย
                    </li>
                </a>
                <a href="{{ url('/main/profile') }}" class="btn " style="color:white;width: 100%;">
                    <li class="{{ (request()->is('main/profile*')) ? 'active' : '' }}">
                    <i class="tim-icons icon-single-02"></i>   ข้อมูลส่วนตัว
                    </li>
                </a>

                <a href="{{ url('/main/payment') }}" class="btn " style="color:white;width: 100%;">
                    <li class="{{ (request()->is('main/payment*')) ? 'active' : '' }}">
                    <i class="tim-icons icon-money-coins"></i>   จ่ายเงิน
                    </li>
                </a>

            </ul>
        </div>
    </div>
</div>