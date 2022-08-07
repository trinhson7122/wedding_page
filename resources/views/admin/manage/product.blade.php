@extends('layout.master')
@section('content')
    <h2>Hoạt động</h2>
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#add-type-modal">Thêm loại</button>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add-category-modal">Thêm thể loại</button>
    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#add-product-modal">Thêm sản phẩm</button>
    <h2>Bảng giá</h2>
    <div id="load-page">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
            @foreach ($types as $type)
                <li class="nav-item">
                    <a class="nav-link @if ($loop->first) active @endif" data-bs-toggle="tab"
                        href="#type_{{ $type->id }}">{{ $type->name }}</a>
                </li>
            @endforeach
        </ul>

        <!-- Tab panes -->
        <div class="tab-content mt-1">
            @foreach ($types as $type)
                <div class="tab-pane container @if ($loop->first) active @endif" id="type_{{ $type->id }}">
                    @foreach ($categories as $category)
                        @if ($products->where('id_category', '=', $category->id)->where('id_type', '=', $type->id)->isNotEmpty())
                            <p>
                                <a class="btn btn-secondary w-15" data-toggle="collapse" href="#category_{{ $category->id }}"
                                    role="button" aria-expanded="false" aria-controls="category_{{ $category->id }}">
                                    {{ $category->name }}
                                </a>
                            </p>
                            <div class="collapse" id="category_{{ $category->id }}">
                                <div class="card card-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Tên sản phẩm</th>
                                                <th>Giá tiền</th>
                                                <th>Mô tả</th>
                                                <th colspan="2">Hoạt động</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($products as $product)
                                                @if ($product->id_type === $type->id && $product->id_category === $category->id)
                                                    <tr>
                                                        <td>{{ $product->name }}</td>
                                                        <td>{{ $product->formatPrice() }}</td>
                                                        <td>{{ $product->note }}</td>
                                                        <td>
                                                            <form action="{{ route('admin.manage.edit-product', ['product' => $product->id]) }}" method="get">
                                                                <button type="button" class="btn btn-warning btn-edit-product" data-toggle="modal" data-target="#update-product-modal">Sửa</button>
                                                            </form>
                                                        </td>
                                                        <td>
                                                            <form action="{{ route('admin.manage.destroy-product', ['product' => $product->id]) }}" method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger destroy-product" data-toggle="modal" data-target="#destroy-type-modal" type="button">Xóa</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
    @include('layout.modal.admin.manage.product')
@endsection
