@extends('layout.master')
@section('content')
    <h2>Hoạt động</h2>
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#add-type-modal">Thêm loại</button>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add-category-modal">Thêm thể loại</button>
    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#add-product-modal">Thêm sản phẩm</button>
    <h2>Bảng giá</h2>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#ngoai_troi">Ngoài trời</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#khach_san">Hội trường - khách sạn</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tu_gia">Tư gia</a>
        </li>
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
            {{-- Photobooth --}}
            <p>
                <a class="btn btn-secondary w-15" data-toggle="collapse" href="#photobooth" role="button"
                    aria-expanded="false" aria-controls="photobooth">
                    Photobooth
                </a>
            </p>
            <div class="collapse" id="photobooth">
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
            {{-- end Photobooth --}}
            {{-- duong_dan --}}
            <p>
                <a class="btn btn-secondary w-15" data-toggle="collapse" href="#duong_dan" role="button"
                    aria-expanded="false" aria-controls="duong_dan">
                    Đường dẫn
                </a>
            </p>
            <div class="collapse" id="duong_dan">
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
            {{-- end duong_dan --}}
            {{-- reception --}}
            <p>
                <a class="btn btn-secondary w-15" data-toggle="collapse" href="#reception" role="button"
                    aria-expanded="false" aria-controls="reception">
                    Reception
                </a>
            </p>
            <div class="collapse" id="reception">
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
            {{-- end reception --}}
            {{-- khac --}}
            <p>
                <a class="btn btn-secondary w-15" data-toggle="collapse" href="#khac" role="button" aria-expanded="false"
                    aria-controls="khac">
                    Khác
                </a>
            </p>
            <div class="collapse" id="khac">
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
            {{-- end khac --}}
        </div>
        <div class="tab-pane container fade" id="khach_san">

        </div>
        <div class="tab-pane container fade" id="tu_gia">

        </div>
    </div>
@endsection
