@extends('layout.master')
@section('content')
<div id="load-page">
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
            @foreach ($accounts as $account)
                <tr>
                    <td>{{ $account->id }}</td>
                    <td>{{ $account->name }}</td>
                    <td>{{ $account->address }}</td>
                    <td>{{ $account->phone }}</td>
                    <td>0</td>
                    <td>{{ $account->created_at }}</td>
                    <td>
                        <form action="{{ route('admin.manage.edit-account', ['account' => $account->id]) }}" method="get">
                            <button type="button" class="btn btn-warning">Sửa</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('admin.manage.destroy-account', ['account' => $account->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger destroy-account" type="button">Xóa</button>
                        </form>
                    </td>
                    <td>
                        <button class="btn btn-info">Thêm báo giá</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $accounts->links() }}
    @include('layout.modal.admin.manage.customer')
</div>
@endsection
