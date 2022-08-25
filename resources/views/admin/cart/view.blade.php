<div>
    <div class="text-center mt-2 mb-4">
        <h3>Chi tiết báo giá</h3>
    </div>
    <h4 class="float-right">
        Tổng tiền:
        <span class="sumprice" data-load="{{ route('admin.show-cart', ['cart' => $cart->id]) }}"
            id="sum_price_cart">{{ formatMoney($cart->sumPrice(), 'VND') }}</span>
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
            <div class="tab-pane container @if ($loop->first) active @endif"
                id="type_{{ $type->id }}">
                @foreach ($categories as $category)
                    @if ($products->where('id_category', '=', $category->id)->where('id_type', '=', $type->id)->isNotEmpty())
                        <p>
                            <a class="btn btn-secondary w-15" data-toggle="collapse"
                                href="#category_{{ $category->id }}" role="button" aria-expanded="false"
                                aria-controls="category_{{ $category->id }}">
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
                                            <th>Giá tiền</th>
                                            <th>Mô tả</th>
                                            <th>Số lượng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            @if ($product->id_type === $type->id && $product->id_category === $category->id)
                                                <tr>
                                                    <td>
                                                        <form action="{{ route('admin.store-cart-detail') }}"
                                                            method="post" class="form-group">
                                                            @csrf
                                                            <input type="hidden" name="id_cart"
                                                                value="{{ $cart->id }}">
                                                            <input type="hidden"
                                                                class="price_product_{{ $product->id }} form-control input-sm"
                                                                name="price" value="{{ $product->price }}">
                                                            <input type="hidden"
                                                                class="amount-product-input-{{ $product->id }}"
                                                                name="amount"
                                                                @if ($cartDetails->where('id_product', '=', $product->id)->isNotEmpty()) value="{{ $cartDetails->where('id_product', '=', $product->id)->first()->amount }}"
                                                                @else
                                                                    value="1" @endif>
                                                            <input type="hidden" name="id_product"
                                                                value="{{ $product->id }}">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" value="{{ $product->id }}"
                                                                    name="id_product"
                                                                    class="custom-control-input check-product"
                                                                    id="product_{{ $product->id }}"
                                                                    @if ($cartDetails->where('id_product', '=', $product->id)->isNotEmpty()) checked data-cartid="{{ $cartDetails->where('id_product', '=', $product->id)->first()->id }}" @endif>
                                                                <label class="custom-control-label"
                                                                    for="product_{{ $product->id }}">
                                                                </label>
                                                            </div>
                                                        </form>
                                                    </td>
                                                    <td>{{ $product->name }}</td>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-8">
                                                                <input type="number"
                                                                    class="price_product_{{ $product->id }} form-control input-sm"
                                                                    name="price" value="{{ $product->price }}">
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="btn btn-warning">Lưu</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>{{ $product->note }}</td>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-4">
                                                                {{-- giam --}}
                                                                <button data-id="{{ $product->id }}"
                                                                    class="btn btn-danger minus-product"
                                                                    type="button"><i
                                                                        class="dripicons-minus"></i></button>
                                                            </div>
                                                            <div class="col-4 text-center">
                                                                <div class="amount-product-{{ $product->id }}">
                                                                    @if ($cartDetails->where('id_product', '=', $product->id)->isNotEmpty())
                                                                        {{ $cartDetails->where('id_product', '=', $product->id)->first()->amount }}
                                                                    @else
                                                                        1
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                {{-- tang --}}
                                                                <button data-id="{{ $product->id }}"
                                                                    class="btn btn-success plus-product"
                                                                    type="button"><i
                                                                        class="dripicons-plus"></i></button>
                                                            </div>
                                                        </div>
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
