<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 14px;
        }
        .header{
            width: 100%;
            position: relative;
            background-color: rgb(255, 246, 246);
        }
        .logo{
            float: left;
            width: 50%;
            height: 150px;
            text-align: center;
        }
        .title
        {
            padding-top: 20px; 
            text-transform: uppercase;
        }
        .info{
            height: 150px;
            color: rgb(32, 32, 32);
            font-size: 120%;
        }
        .header::after{
            display: block;
            clear: both;
            content: "";
        }
        .logo img{
            width: 350px;
            position: relative;
            top: 50%;
            transform: translateY(-50%);
        }
        table{
            margin-bottom: 20px;
        }
        .table-list{
            width: 100%;
        }
        .table-end{
            width: 40%;
        }
        caption{
            border: 1px solid black;
            padding: 10px 0;
            background-color: rgb(0, 66, 110);
            font-weight: bold;
            color: white;
            text-transform: uppercase;
        }
        h2{
            text-align: center;
            text-transform: uppercase;
        }
        thead tr{
            background-color: rgb(183, 217, 240);
        }
        td{
            padding: 10px 3px;
        }
        th{
            text-transform: uppercase;
            font-size: 90%;
            padding: 10px 0;
        }
        tfoot{
            text-transform: uppercase;
            font-weight: bold;
            background-color: rgb(183, 217, 240);
        }
    </style>
    <title>Báo giá</title>
</head>

<body>
    <div class="header">
        <div class="logo">
            <img src="https://tiffany.com.vn/wp-content/uploads/2020/06/02-logo-chen-anh_logo-chung_Tiffany-Wedding-Event-Flowers_ngang.png_xanh-1-768x234.png"
                alt="logo">
        </div>
        <div class="info">
            <div class="title">Công ti cổ phần du lịch truyền thông VFT</div>
            <div>FB: </div>
            <div>HotLine: 0372238783</div>
            <div>Địa chỉ: 103 Ô Chợ Dừa, Đống Đa, Hà Nội</div>
        </div>
    </div>
    <div class="body">
        <h2>Bảng phân bố chi phí các hạng mục decor</h2>
        @foreach ($types as $type)
            @if ($cart->hasType($type->id))
                <table border="1" cellspacing="0" class="table-list">
                    <caption>{{ $type->name }}</caption>
                    <thead>
                        <tr>
                            <th>Hạng mục</th>
                            <th>Lựa chọn</th>
                            <th>Mô tả</th>
                            <th>Số lượng</th>
                            <th>Đơn giá</th>
                            <th>Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cartDetails as $each)
                            @if ($each->product->id_type == $type->id)
                                <tr>
                                    <td>{{ $each->product->category->name }}</td>
                                    <td>{{ $each->product->name }}</td>
                                    <td>{{ $each->product->note }}</td>
                                    <td align="center">{{ $each->amount }}</td>
                                    <td align="center">{{ formatMoney($each->product->price) }}</td>
                                    <td align="center">{{ formatMoney($each->sumPrice()) }}</td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr align="center">
                            <td colspan="4">Tổng</td>
                            <td colspan="2">{{ formatMoney($cart->sumTypePrice($type->id)) }}</td>
                        </tr>
                    </tfoot>
                </table>
            @endif
        @endforeach
        <table border="1" cellspacing="0" class="table-end">
            <thead>
                <tr>
                    <th colspan="2">Tổng hợp chi phí</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($types as $type)
                    @if ($cart->hasType($type->id))
                        <tr>
                            <td>{{ $type->name }}</td>
                            <td align="center">{{ formatMoney($cart->sumTypePrice($type->id)) }}</td>
                        </tr>
                    @endif
                @endforeach
                <tfoot>
                    <tr>
                        <td>TỔNG</td>
                        <td align="center">{{ formatMoney($cart->sumPrice()) }}</td>
                    </tr>
                </tfoot>
            </tbody>
        </table>
    </div>
</body>

</html>
