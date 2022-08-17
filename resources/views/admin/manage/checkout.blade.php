@extends('layout.master')
@section('content')
<div id="load-page">
    <h2>Danh sách báo giá</h2>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Họ và tên</th>
                <th>Số điện thoại</th>
                <th>Tổng tiền</th>
                <th>Tạo lúc</th>
                <th colspan="3">Hoạt động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($carts as $cart)
                <tr>
                    <td>{{ $cart->id }}</td>
                    <td>{{ $cart->account->name }}</td>
                    <td>{{ $cart->account->phone }}</td>
                    <td>{{ $cart->formatPrice() }}</td>
                    <td>{{ $cart->created_at }}</td>
                    <td>
                        <form action="{{ route('admin.show-cart', ['cart' => $cart->id]) }}" method="get">
                            <button class="btn btn-info show-cart-detail" data-toggle="modal" data-target="#show-cart-detail-modal" type="button">Xem</button>
                        </form>
                    </td>
                    <td>
                        <form class="form-inline" action="{{ route('admin.destroy-cart', ['cart' => $cart->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger destroy-cart" type="button">Xóa</button>
                        </form>
                    </td>
                    <td>
                        <div class="btn btn-warning">Xuất</div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $carts->links() }}
</div>
@include('layout.modal.admin.manage.cartDetail')
@endsection