@extends('layout.master')
@section('content')
<div id="load-page">
    <h2 class="mt-8">Khách hàng</h2>
    <button class="btn btn-primary" data-toggle="modal" data-target="#add-customer-modal">Thêm khách hàng</button>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Tên khách hàng</th>
                <th>Địa chỉ</th>
                <th>Điện thoại</th>
                <th>Lần báo giá</th>
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
                    <td>{{ $account->countOfCart() }}</td>
                    <td>{{ $account->created_at }}</td>
                    {{-- edit --}}
                    <td>
                        <form action="{{ route('admin.edit-account', ['account' => $account->id]) }}" method="get">
                            <button type="button" class="btn btn-warning btn-edit-account" data-toggle="modal" data-target="#update-customer-modal"><i class="uil-edit"></i></button>
                        </form>
                    </td>
                    {{-- delete --}}
                    <td>
                        <form action="{{ route('admin.destroy-account', ['account' => $account->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger destroy-account" type="button"><i class="uil-trash"></i></button>
                        </form>
                    </td>
                    {{-- them bao gia --}}
                    <td>
                        <form action="{{ route('admin.store-cart') }}" method="post">
                            @csrf
                            <input type="hidden" hidden name="id_account" value="{{ $account->id }}">
                            <button type="button" class="btn btn-info btn-add-cart"><i class="uil-file-plus-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $accounts->links() }}
    @include('layout.modal.admin.manage.customer')
</div>
@endsection
