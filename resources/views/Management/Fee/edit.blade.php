<div class="modal fade" id="staticBackdropEdit{{$f->id}}" data-backdrop="static" data-keyboard="false"
     tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Form sửa thông tin đợt đóng</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ route('update.fee') }}" method="post">
                @csrf <!-- CSRF Protection -->
                <div class="modal-body">
                    <div class="card-body">
                        <div class="row g-3">
                            <input hidden name="id" value="{{$f->id}}">
                            <div class="col">
                                <label for="payment_times" class="form-label">Số đợt đóng</label>
                                <input type="number" class="form-control"
                                       placeholder="Số đợt đóng"
                                       min="{{$f->school_payment_times}}"
                                       max="30"
                                       name="school_payment_times" value="{{$f->school_payment_times}}">
                            </div>
{{--                            <div class="col">--}}
{{--                                <label for="fee" class="form-label">Tổng tiền</label>--}}
{{--                                <input type="text" class="form-control"--}}
{{--                                       placeholder=""--}}
{{--                                       name="original_fee" value="{{$f->original_fee}}" disabled>--}}
{{--                            </div>--}}
                        </div>

                        <div class="row g-3" hidden>
                            <div class="col">
                                <label for="idClass" class="form-label">Niên khóa</label>
                                <select class="form-control" name="id_school_year">
                                    <option value="{{$f->id_school_year}}">{{$f->number_course}}</option>
                                    @foreach($year as $y)
                                        @if($y->number_course != $f->number_course)
                                            <option value="{{$y->id}}">{{$y->number_course}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <label for="nameStudent" class="form-label">Chuyên ngành</label>
                                <select class="form-control" name="id_major">
                                    <option value="{{$f->id_major}}">{{$f->majors_name}}</option>
                                    @foreach($major as $m)
                                        @if($m->majors_name != $f->majors_name)
                                            <option value="{{$m->id}}">{{$m->majors_name}}</option>
                                        @endif
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
