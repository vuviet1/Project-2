<div class="modal fade" id="staticBackdropEdit{{$f->id}}" data-backdrop="static" data-keyboard="false"
     tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Form sửa thông tin phiếu thu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ route('update.tuition') }}" method="post">
                @csrf <!-- CSRF Protection -->
                <div class="modal-body">
                    <div class="card-body">
                        <div class="row g-3">
                            <input hidden name="id" value="{{$f->id}}">
                            <div class="col">
                                <label for="payment_times" class="form-label">Lần đóng thứ</label>
                                <input type="number" class="form-control"
                                       placeholder="Lần đóng thứ"
                                       name="payment_times" value="{{$f->payment_times}}">
                            </div>
                            <div class="col">
                                <label for="fee" class="form-label">Số tiền đóng</label>
                                <input type="text" class="form-control"
                                       placeholder="..."
                                       name="fee" value="{{$f->fee}}">
                            </div>
                        </div>

                        <div class="row g-3">

                            <div class="col">
                                <label for="nameStudent" class="form-label">Ghi chú</label>
                                <input type="text" class="form-control"
                                          placeholder="Ghi chú"
                                          name="note" value="{{$f->note}}">
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col">
                                <label for="idClass" class="form-label">Mã sinh viên</label>
{{--                                <input type="text" class="form-control"--}}
{{--                                       placeholder="Mã sinh viên"--}}
{{--                                       name="id_student" value="{{$f->id_student}}" readonly>--}}
                                <select class="form-control" name="id_student">
{{--                                    <option selected>-- Chọn sinh viên --</option>--}}
                                    <option value="{{$f->id}}">{{$f->name}}</option>
{{--                                    @foreach($student as $s)--}}
{{--                                        <option value="{{$s->id}}">{{$s->name}}</option>--}}
{{--                                    @endforeach--}}
                                </select>
                            </div>
{{--                            <div class="col">--}}
{{--                                <label for="nameStudent" class="form-label">Họ và tên</label>--}}
{{--                                <input type="text" class="form-control"--}}
{{--                                       placeholder="Họ và tên"--}}
{{--                                value="{{$f->name}}" readonly>--}}
{{--                            </div>--}}
                        </div>

                        <div class="row g-3">
                            <div class="col">
                                <label for="fee" class="form-label">Mã học phí</label>
{{--                                <input type="text" class="form-control"--}}
{{--                                       placeholder="Mã học phí"--}}
{{--                                       name="id_fee">--}}
                                <select class="form-control" name="id_fee">
{{--                                    <option selected>-- Chọn học phí --</option>--}}
{{--                                    <option value="{{$f->id}}">Niên khóa: {{$f->number_course}} ----}}
{{--                                        Chuyên ngành: {{$f->majors_name}} ----}}
{{--                                        Số đợt đóng: {{$f->school_payment_times}}</option>--}}
                                    @foreach($fee as $s)
                                        <option value="{{$s->id}}">Niên khóa: {{$s->number_course}} --
                                            Chuyên ngành: {{$s->majors_name}} --
                                            Số đợt đóng: {{$s->school_payment_times}}
                                        </option>
                                    @endforeach
                                </select>
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
