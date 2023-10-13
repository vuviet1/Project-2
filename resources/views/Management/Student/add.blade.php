<div class="modal fade" id="staticBackdropAdd" data-backdrop="static" data-keyboard="false"
     tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Form thêm thông tin học sinh</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ route('add.student') }}" method="post">
                @csrf <!-- CSRF Protection -->
                <div class="modal-body">
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col">
                                <label for="idClass" class="form-label">Mã hoc sinh</label>
                                <input type="text" class="form-control"
                                       placeholder="Mã hoc sinh"
                                       name="id_user">
                            </div>
                            <div class="col" hidden>
                                <label for="nameStudent" class="form-label">Số lần đóng</label>
                                <input type="text" class="form-control"
                                       placeholder="Số lần đóng"
                                       name="school_payment_times" value="0">
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col">
                                <label for="idClass" class="form-label">Học bổng</label>
                                <input type="text" class="form-control"
                                       placeholder="Số tiền"
                                       name="scholarship">
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
