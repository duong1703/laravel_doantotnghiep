@extends('admin.main')

@section('content')
<main class="dash-content">
    <div class="container-fluid">
        <h1 class="dash-title">Trang chủ / Tài khoản</h1>
        <div class="row">
            <div class="col-lg-12">
                <div class="card easion-card">
                    <div class="card-header">
                        <div class="easion-card-icon">
                            <i class="fas fa-table"></i>
                        </div>
                        <div class="easion-card-title">Danh sách tài khoản</div>
                    </div>
                    <div class="card-body ">
                        <table id="datatable" class="cell-border" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Tên</th>
                                    <th scope="col">Mật khẩu</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $count = 1; // Khởi tạo biến đếm
                                @endphp
                                @foreach ( $listAccount as $data )

                                <tr>
                                    <td>{{ $count++ }}</td>
                                    <td>{{ $data -> name }}</td>
                                    <td>{{ $data -> password }}</td>
                                    <td>{{ $data -> email }}</td>
                                    <td class="text-center">
                                        <a href="" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                        <a data-url="" class="btn btn-danger btn-del-confirm"><i
                                                class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection()