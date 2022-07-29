{{-- modal add something --}}
    {{-- type --}}
    <div id="add-type-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="text-center mt-2 mb-4">
                        <h3>Thêm loại</h3>
                    </div>
                
                    <form class="pl-3 pr-3" action="{{ route('admin.store-type') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="nametype">Tên loại</label>
                            <input class="form-control" type="text" id="nametype" required="" name="name"
                                placeholder="ví dụ: ngoài trời, khách sạn,...">
                        </div>

                        <div class="form-group text-center">
                            <button class="btn btn-primary" id="add-type" type="button">Thêm</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
    {{-- category --}}
    <div id="add-category-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="text-center mt-2 mb-4">
                        <h3>Thêm thể loại</h3>
                    </div>
                    
                    <form class="pl-3 pr-3" action="{{ route('admin.store-category') }}" method="get">
                        @csrf
                        <div class="form-group">
                            <label for="namecategory">Tên thể loại</label>
                            <input class="form-control" type="text" id="namecategory" required="" name="name"
                                placeholder="ví dụ: Sân khấu, photobooth ...">
                        </div>

                        <div class="form-group text-center">
                            <button class="btn btn-primary" id="add-category" type="button">Thêm</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
    {{-- product --}}
    <div id="add-product-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" id="product-load">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="text-center mt-2 mb-4">
                        <h3>Thêm sản phẩm</h3>
                    </div>

                    <form class="pl-3 pr-3" action="#">

                        <div class="form-group">
                            <label for="nameproduct">Tên sản phẩm</label>
                            <input class="form-control" type="text" id="nametype" required=""
                                placeholder="ví dụ: hoa, ...">
                        </div>

                        <div class="form-group form-type">
                            <label for="form-product">Thuộc loại</label>
                            <select class="form-control" id="form-product" 
                            onchange="document.getElementsByName('id_type')[0].value = document.querySelector('.form-type select').value"
                            >
                            @foreach($types as $each)
                                <option value="{{ $each->id }}" 
                                    @if($loop->first)
                                        selected
                                    @endif
                                    >{{ $each->name }}
                                </option>
                            @endforeach
                            </select>
                            <input type="hidden" name="id_type" value="{{ $types->first()->id }}">
                        </div>

                        <div class="form-group form-category">
                            <label for="form-category">Thuộc hạng mục</label>
                            <select class="form-control" id="form-category" 
                            onchange="document.getElementsByName('id_category')[0].value = document.querySelector('.form-category select').value"
                            >
                            @foreach($categories as $each)
                                <option value="{{ $each->id }}" 
                                    @if($loop->first)
                                        selected
                                    @endif
                                    >{{ $each->name }}
                                </option>
                            @endforeach
                            </select>
                            <input type="hidden" name="id_category" value="
                            @if($categories->count() > 0)
                                {{ $categories->first()->id }}
                            @else
                                0
                            @endif
                            ">
                        </div>

                        <div class="form-group">
                            <label for="priceproduct">Giá tiền</label>
                            <input class="form-control" type="number" id="priceproduct" required="" value="100000">
                        </div>

                        <div class="form-group">
                            <label for="note">Ghi chú</label>
                            <input class="form-control" type="text" id="note" required="">
                        </div>

                        <div class="form-group text-center">
                            <button class="btn btn-primary" type="submit">Thêm</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
    {{-- end modal --}}