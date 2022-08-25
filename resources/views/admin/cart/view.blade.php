
<div>
    <div class="text-center mt-2 mb-4">
        <h3>Chi tiết báo giá</h3>
    </div>
    <h4 class="float-right">
        Tổng tiền: 
        <span class="sumprice" data-load="{{ route('admin.show-cart', ['cart' => $cart->id]) }}" id="sum_price_cart">{{ $cart->formatPrice($cart->sumPrice(), 'VND') }}</span>
    </h4>
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
                                            <th>Lựa chọn</th>
                                            <th>Tên sản phẩm</th>
                                            <th colspan="2">Giá tiền</th>
                                            <th>Mô tả</th>
                                            <th colspan="3">Số lượng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            @if ($product->id_type === $type->id && $product->id_category === $category->id)
                                                <tr>
                                                    <td>
                                                        <form action="{{ route('admin.store-cart-detail') }}" class="form-group" method="post">
                                                            @csrf
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" value="{{ $product->id }}" name="id_product" class="custom-control-input check-product" id="product_{{ $product->id }}"
                                                                @if ($cartDetails->where('id_product', '=', $product->id)->isNotEmpty())
                                                                    checked data-cartid="{{$cartDetails->where('id_product', '=', $product->id)->first()->id}}" 
                                                                @endif
                                                                >
                                                                <label class="custom-control-label" for="product_{{ $product->id }}">
                                                                </label>
                                                            </div>
                                                            <input type="hidden" name="id_cart" value="{{ $cart->id }}">
                                                            <input type="hidden" class="price_product_{{ $product->id }}" name="price" value="{{ $product->price }}">
                                                            <input type="hidden" name="id_product" value="{{ $product->id }}">
                                                            <input type="hidden" class="amount-product-input-{{ $product->id }}" name="amount"
                                                            @if ($cartDetails->where('id_product', '=', $product->id)->isNotEmpty())
                                                                value="{{ $cartDetails->where('id_product', '=', $product->id)->first()->amount }}"
                                                            @else
                                                                value="1"
                                                            @endif
                                                            >
                                                        </form>
                                                    </td>
                                                    <td>{{ $product->name }}</td>
                                                    <td>{{ $product->formatPrice() }}</td>
                                                    <td>
                                                        <button class="btn btn-warning edit-price">Edit</button>
                                                    </td>
                                                    <td>{{ $product->note }}</td>
                                                    <td>
                                                        {{-- giam --}}
                                                        <button data-id="{{ $product->id }}" class="btn btn-danger minus-product" type="button"><i class="dripicons-minus"></i></button>
                                                    </td>
                                                    <td>
                                                        <div class="amount-product-{{ $product->id }}">
                                                            @if ($cartDetails->where('id_product', '=', $product->id)->isNotEmpty())
                                                                {{ $cartDetails->where('id_product', '=', $product->id)->first()->amount }}
                                                            @else
                                                                1
                                                            @endif
                                                        </div>
                                                    </td>
                                                    <td>
                                                        {{-- tang --}}
                                                        <button data-id="{{ $product->id }}" class="btn btn-success plus-product" type="button"><i class="dripicons-plus"></i></button>
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