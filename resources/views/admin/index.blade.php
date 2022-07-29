@extends('layout.master')
@section('content')
    <h2>Hoạt động</h2>
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#add-type-modal">Thêm loại</button>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add-category-modal">Thêm thể loại</button>
    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#add-product-modal">Thêm sản phẩm</button>
    <h2>Bảng giá</h2>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
        @foreach ($types as $type)
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#type_{{ $type->id }}">{{ $type->name }}</a>
            </li>
        @endforeach
    </ul>

    <!-- Tab panes -->
    <div class="tab-content mt-1">
        
        <div class="tab-pane container active" id="ngoai_troi">
            {{-- san khau --}}
            <p>
                <a class="btn btn-secondary w-15" data-toggle="collapse" href="#san_khau" role="button"
                    aria-expanded="false" aria-controls="san_khau">
                    Sân khấu
                </a>
            </p>
            <div class="collapse" id="san_khau">
                <div class="card card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Hạng mục</th>
                                <th>Giá tiền</th>
                                <th>Mô tả</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Sân khấu đơn lớp hoa lụa - Lá tươi</td>
                                <td>12000000</td>
                                <td>Khu vực làm lễ kết cấu đơn lớp kết hợp khung decor đơn giản. Trang trí Hoa lụa - lá tươi
                                    theo mẫu có sẵn, phong cách hiện đại, tinh tế.
                                    Tone màu theo concept</td>
                            </tr>
                            <tr>
                                <td>Sân khấu đơn lớp hoa lụa - Lá tươi</td>
                                <td>12000000</td>
                                <td>Khu vực làm lễ kết cấu đơn lớp kết hợp khung decor đơn giản. Trang trí Hoa lụa - lá tươi
                                    theo mẫu có sẵn, phong cách hiện đại, tinh tế.
                                    Tone màu theo concept</td>
                            </tr>
                            <tr>
                                <td>Sân khấu đơn lớp hoa lụa - Lá tươi</td>
                                <td>12000000</td>
                                <td>Khu vực làm lễ kết cấu đơn lớp kết hợp khung decor đơn giản. Trang trí Hoa lụa - lá tươi
                                    theo mẫu có sẵn, phong cách hiện đại, tinh tế.
                                    Tone màu theo concept</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- end san khau --}}
        </div>
        <div class="tab-pane container fade" id="khach_san">

        </div>
        <div class="tab-pane container fade" id="tu_gia">

        </div>
    </div>
@endsection
