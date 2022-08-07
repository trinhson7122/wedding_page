{{-- modal add something --}}
<div id="load-modal">
    {{-- type --}}
    <div id="add-type-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="text-center mt-2 mb-4">
                        <h3>Thêm loại</h3>
                    </div>
                
                    <form class="pl-3 pr-3" action="{{ route('admin.manage.store-type') }}" method="post">
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
                    
                    <form class="pl-3 pr-3" action="{{ route('admin.manage.store-category') }}" method="get">
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
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="text-center mt-2 mb-4">
                        <h3>Thêm sản phẩm</h3>
                    </div>

                    <form class="pl-3 pr-3" action="{{ route('admin.manage.store-product') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="nameproduct">Tên sản phẩm</label>
                            <input class="form-control" type="text" name="name" required=""
                                placeholder="ví dụ: hoa, ...">
                        </div>

                        <div class="form-group form-type">
                            <label for="form-product">Thuộc loại</label>
                            <select class="form-control" id="form-type" 
                            onchange="$('#add-product-modal .form-type input').val($('#add-product-modal .form-type select').val())"
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
                            <input type="hidden" name="id_type" value="1" value="{{ $types->first()->id }}">
                        </div>

                        <div class="form-group form-category">
                            <label for="form-category">Thuộc hạng mục</label>
                            <select class="form-control" id="form-category" 
                            onchange="$('#add-product-modal .form-category input').val($('#add-product-modal .form-category select').val())"
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
                            <input type="hidden" name="id_category" value="1" value="{{ $categories->first()->id }}">
                        </div>

                        <div class="form-group">
                            <label for="priceproduct">Giá tiền</label>
                            <input class="form-control" type="number" name="price" required="" value="100000">
                        </div>

                        <div class="form-group">
                            <label for="note">Ghi chú</label>
                            <input class="form-control" type="text" name="note" value="Không">
                        </div>

                        <div class="form-group text-center">
                            <button class="btn btn-primary" id="add-product" type="button">Thêm</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
    <div id="update-product-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
        
                <div class="modal-body">
                    <div class="text-center mt-2 mb-4">
                        <h3>Sửa sản phẩm</h3>
                    </div>
        
                    <form class="pl-3 pr-3" action="" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nameproduct">Tên sản phẩm</label>
                            <input class="form-control product-name" type="text" name="name" required=""
                                placeholder="ví dụ: hoa, ..." value="">
                        </div>
        
                        <div class="form-group form-type">
                            <label for="form-product">Thuộc loại</label>
                            <select class="form-control" id="form-type" 
                            onchange="$('#update-product-modal .form-type input').val($('#update-product-modal .form-type select').val())"
                            >
                            @foreach($types as $each)
                                <option value="{{ $each->id }}">{{ $each->name }}
                                </option>
                            @endforeach
                            </select>
                            <input type="hidden" name="id_type" value="1">
                        </div>
        
                        <div class="form-group form-category">
                            <label for="form-category">Thuộc hạng mục</label>
                            <select class="form-control" id="form-category" 
                            onchange="$('#update-product-modal .form-category input').val($('#update-product-modal .form-category select').val())"
                            >
                            @foreach($categories as $each)
                                <option value="{{ $each->id }}">{{ $each->name }}
                                </option>
                            @endforeach
                            </select>
                            <input type="hidden" name="id_category">
                        </div>
        
                        <div class="form-group">
                            <label for="priceproduct">Giá tiền</label>
                            <input class="form-control product-price" type="number" name="price" required="" value="">
                        </div>
        
                        <div class="form-group">
                            <label for="note">Ghi chú</label>
                            <input class="form-control product-note" type="text" name="note" value="">
                        </div>
        
                        <div class="form-group text-center">
                            <button class="btn btn-primary update-product" type="button">Sửa</button>
                        </div>
        
                    </form>
        
                </div>
            </div>
        </div>
    </div>
</div>
{{-- end modal --}}