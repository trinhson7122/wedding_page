@extends('layout.master')
@section('content')
<h2>Khách hàng</h2>
<button class="btn btn-primary" data-toggle="modal" data-target="#add-customer-modal">Thêm khách hàng</button>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Tên khách hàng</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
            <th>Số lần đã báo giá</th>
            <th>Ngày tạo</th>
            <th colspan="3">Hoạt động</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Trịnh xuân sơn</td>
            <td>dia chi</td>
            <td>0372238783</td>
            <td>0</td>
            <td>7/1/2022</td>
            <td>
                <form action="" method="get">
                    <button type="button" class="btn btn-warning">Sửa</button>
                </form>
            </td>
            <td>
                <form action="" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="button">Xóa</button>
                </form>
            </td>
            <td>
                <button class="btn btn-info">Thêm báo giá</button>
            </td>
        </tr>
    </tbody>
</table>
@include('layout.modal.admin.manage.customer')
@endsection