<div class="modal fade" id="staticBackdropAdd" data-backdrop="static" data-keyboard="false"
     tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Form thêm thông tin đợt đóng</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ route('add.fee') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="card-body">
                        <div class="row g-3">
{{--                            <div class="col">--}}
{{--                                <label for="payment_times" class="form-label">Số đợt đóng</label>--}}
{{--                                <input type="number" class="form-control"--}}
{{--                                       placeholder="Số đợt đóng"--}}
{{--                                       min="1"--}}
{{--                                       max="30"--}}
{{--                                       name="school_payment_times" required>--}}
{{--                            </div>--}}
                            <div class="col">
                                <label for="fee" class="form-label">Tổng tiền</label>
                                <input type="number" class="form-control"
                                       placeholder=""
                                       name="original_fee" required min="1">
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col">
                                <label for="idClass" class="form-label">Niên khóa</label>
                                <select class="form-control" name="id_school_year">
                                    <option value="">-- Chọn niên khóa --</option>
                                    @foreach($year as $y)
                                    <option value="{{$y->id}}">{{$y->number_course}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <label for="nameStudent" class="form-label">Chuyên ngành</label>
                                <select class="form-control" name="id_major">
                                    <option value="">-- Chọn chuyên ngành --</option>
                                    @foreach($major as $m)
                                        <option value="{{$m->id}}">{{$m->majors_name}}</option>
                                    @endforeach
                                </select>
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
