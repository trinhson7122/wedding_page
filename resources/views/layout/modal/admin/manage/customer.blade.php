<div>
    <!-- Add customer Modal -->
    <div id="add-customer-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="text-center mt-2 mb-4">
                        <h3>Thêm khách hàng</h3>
                    </div>
                
                    <form class="pl-3 pr-3" action="{{ route('admin.manage.store-account') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="nametype">Tên khách hàng</label>
                            <input class="form-control" type="text" required name="name">
                        </div>

                        <div class="form-group">
                            <label for="nametype">Số điện thoại khách hàng</label>
                            <input class="form-control" type="number" required name="phone">
                        </div>

                        <div class="form-group">
                            <label for="nametype">Địa chỉ khách hàng</label>
                            <input class="form-control" type="text" required name="address">
                        </div>

                        <div class="form-group">
                            <label for="nametype">Tài khoản đăng nhập</label>
                            <input class="form-control" type="text" placeholder="Có thể để trống" name="username">
                        </div>

                        <div class="form-group">
                            <label for="nametype">Mật khẩu</label>
                            <input class="form-control" type="text" placeholder="Có thể để trống" name="password">
                        </div>

                        <div class="form-group text-center">
                            <button class="btn btn-primary" id="add-account" type="button">Thêm</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- Edit customer Modal -->
    <div id="update-customer-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="text-center mt-2 mb-4">
                        <h3>Sửa khách hàng</h3>
                    </div>
                
                    <form class="pl-3 pr-3" action="" method="post">
                        @csrf
                        @method("PUT")
                        <div class="form-group account-name">
                            <label for="nametype">Tên khách hàng</label>
                            <input class="form-control" type="text" required name="name">
                        </div>

                        <div class="form-group account-phone">
                            <label for="nametype">Số điện thoại khách hàng</label>
                            <input class="form-control" type="number" required name="phone">
                        </div>

                        <div class="form-group account-address">
                            <label for="nametype">Địa chỉ khách hàng</label>
                            <input class="form-control" type="text" required name="address">
                        </div>

                        <div class="form-group account-username">
                            <label for="nametype">Tài khoản đăng nhập</label>
                            <input class="form-control" type="text" placeholder="Có thể để trống" name="username">
                        </div>

                        <div class="form-group account-password">
                            <label for="nametype">Mật khẩu</label>
                            <input class="form-control" type="text" placeholder="Có thể để trống" name="password">
                        </div>

                        <div class="form-group text-center">
                            <button class="btn btn-primary" id="update-account" type="button">Sửa</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>