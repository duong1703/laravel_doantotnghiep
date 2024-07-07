@extends('admin.main')

@section('content')

<div class="container-fluid">

    <div class="row dash-row">
        <div class="col-xl-3">
            <div class="stats stats-primary rounded-4">
                <h3 class="stats-title"> Tổng người dùng </h3>
                <div class="stats-content">
                    <div class="stats-icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="stats-data">
                        <div class="stats-number">{{ $countuser }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3">
            <div class="stats stats-success rounded-4 ">
                <h3 class="stats-title"> Tổng số sản phẩm </h3>
                <div class="stats-content">
                    <div class="stats-icon">
                        <i class="fa fa-box"></i>
                    </div>
                    <div class="stats-data">
                        <div class="stats-number"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3">
            <div class="stats stats-warning rounded-4">
                <h3 class="stats-title"> Tổng số danh mục</h3>
                <div class="stats-content">
                    <div class="stats-icon">
                        <i class="fa fa-list"></i>
                    </div>
                    <div class="stats-data">
                        <div class="stats-number"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3">
            <div class="stats stats-light rounded-4">
                <h3 class="stats-title"> Tổng số đơn hàng</h3>
                <div class="stats-content">
                    <div class="stats-icon">
                        <i class="fa fa-box"></i>
                    </div>
                    <div class="stats-data">
                        <div class="stats-number"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3">
            <div class="stats stats-light rounded-4">
                <h3 class="stats-title"> Tổng quản trị viên</h3>
                <div class="stats-content">
                    <div class="stats-icon">
                        <i class="fa fa-user"> </i>
                    </div>
                    <div class="stats-data">
                        <div class="stats-number">{{ $countadmmin }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection