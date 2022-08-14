@extends('layout.master')
@section('content')
<h2>Danh sách báo giá</h2>
<div id="load-page">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Họ và tên</th>
                <th>Số điện thoại</th>
                <th>Tổng tiền</th>
                <th>Tạo lúc</th>
                <th colspan="2">Hoạt động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($carts as $cart)
                <tr>
                    <td>{{ $cart->id }}</td>
                    <td>{{ $cart->account->name }}</td>
                    <td>{{ $cart->account->phone }}</td>
                    <td>{{ $cart->sum_price }}</td>
                    <td>{{ $cart->created_at }}</td>
                    <td style="display: flex;flex-wrap:wrap">
                        <button class="btn btn-info">Xem</button>
                        <form class="form-inline" action="{{ route('admin.destroy-cart', ['cart' => $cart->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger destroy-cart" type="button">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection