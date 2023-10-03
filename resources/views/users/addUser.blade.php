<div class="modal fade" id="staticBackdropAdd" data-backdrop="static" data-keyboard="false"
     tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Form thêm tài khoản</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ route('add.user') }}" method="post">
                @csrf <!-- CSRF Protection -->
                <div class="modal-body">
                    <div class="card-body">

                        <div class="row g-3">
                            <div class="col">
                                <label for="nameStudent" class="form-label">Họ và tên</label>
                                <input type="text" class="form-control"
                                       placeholder="Họ và tên"
                                       name="name">
                            </div>
{{--                            <div class="col">--}}
{{--                                <label for="nameStudent" class="form-label">Cấp quyền</label>--}}
{{--                                <input type="number" class="form-control"--}}
{{--                                       placeholder="Quyền"--}}
{{--                                       name="role">--}}
{{--                            </div>--}}

                            <div class="col">
                                <label for="role" class="form-label">Cấp quyền</label>
                                <select id="role" class="form-control" name="role" disabled>
                                    <option value="1">Học sinh</option>
                                    <option value="0">Thu ngân</option>
                                </select>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col">
                                <label for="idClass" class="form-label">Số điện thoại</label>
                                <input type="text" class="form-control"
                                       placeholder="Số điện thoại"
                                       name="phone_number">
                            </div>
                            <div class="col">
                                <label for="nameStudent" class="form-label">Ngày sinh</label>
                                <input type="date" class="form-control"
                                       placeholder="Ngày sinh"
                                       name="birthday">
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col">
                                <label for="idClass" class="form-label">Số căn cước công dân</label>
                                <input type="text" class="form-control"
                                       placeholder="CCCD"
                                       name="cccd">
                            </div>
                            <div class="col">
                                <label for="nameStudent" class="form-label">Email</label>
                                <input type="text" class="form-control"
                                       placeholder="Email"
                                       name="email">
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col">
                                <label for="idClass" class="form-label">Địa chỉ</label>
                                <input type="text" class="form-control"
                                       placeholder="Địa chỉ"
                                       name="address">
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col">
                                <label for="nameStudent" class="form-label">Mật khẩu</label>
                                <input type="password" class="form-control"
                                       placeholder="Mật khẩu"
                                       name="password">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                </div>
            </form>

        </div>
    </div>
</div>
