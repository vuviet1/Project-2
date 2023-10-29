<div class="modal fade" id="staticBackdropEdit{{$f->id}}" data-backdrop="static" data-keyboard="false"
     tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Form sửa thông tin học sinh</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{route('update.student')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="card-body">
                        <div class="row g-3">
                            <input hidden name="id" value="{{$f->id}}">
                            <div class="col">
                                <label for="idClass" class="form-label">Mã hoc sinh (BKC)</label>
                                <input type="text" class="form-control"
                                       placeholder="Mã hoc sinh" disabled
                                       value="{{$f->student_code}}">
                            </div>

                            <div class="col">
                                <label for="nameStudent" class="form-label">Họ và tên</label>
                                <input type="text" class="form-control"
                                       placeholder="Họ và tên" disabled
                                       value="{{$f->name}}">
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col">
                                <label for="idClass" class="form-label">Học bổng</label>
                                <input type="text" class="form-control"
                                       placeholder="Số tiền"
                                       name="scholarship" value="{{$f->scholarship}}" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </div>
            </form>

        </div>
    </div>
</div>
