<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                {{--                --}}
                <h5 class="card-title fw-semibold mb-4">Thu phí</h5>
                <div class="card">
                    <div class="row g-3">
{{--                        ADD--}}
                        <div class="col">

                            <div class="btn-add" style="text-align: center; margin-top: 20px">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdropAdd">
                                    Thêm học phí
                                </button>
                                <!-- Modal -->

{{--                                End modal--}}
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
                <hr>
                {{--                --}}
                <h5 class="card-title fw-semibold mb-4">Quá trình nộp học phí của học sinh/sinh viên</h5>
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">Số thứ tự</th>
                                <th scope="col">Ngày nộp</th>
                                <th scope="col">Tổng tiền</th>
                                <th scope="col">Lớp học</th>
                                <th scope="col">Người thu</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(!empty($tuition))
                                @foreach($tuition as $key => $item)
                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <td>{{$item->date}}</td>
                                <td>{{$item->total_fee}}</td>
                                <td>{{$item->name_class}}</td>
                                <td>{{$item->collector}}</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdropEdit">
                                        Chỉnh sửa
                                    </button>
                                </td>
                                <td><a type="button" style="margin-bottom: 30px"
                                       class="btn btn-danger m-1 select-choose" href="{{route('addtuition')}}">Xóa</a></td>
                                <td><a type="button" style="margin-bottom: 30px"
                                       class="btn btn-success m-1 select-choose" href="{{route('addtuition')}}">Xuất hóa
                                        đơn</a></td>
                            </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                {{--                --}}
                <a class="btn btn-primary" href="{{route('tuition')}}">Quay lại</a>
            </div>
        </div>
    </div>
</div>


{{--Modal Edit tuition--}}
<div class="modal fade" id="staticBackdropEdit" data-bs-backdrop="static"
     data-bs-keyboard="false"
     tabindex="-1" aria-labelledby="staticBackdropLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h1 class="modal-title fs-6" id="staticBackdropLabel">Form sửa hóa
                        đơn</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{--                                    --}}
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col">
                                <label for="idClass" class="form-label">Mã phiếu</label>
                                <input type="text" class="form-control"
                                       placeholder="Mã SV"
                                       name="id" disabled>
                            </div>
                            <div class="col">
                                <label for="nameStudent" class="form-label">Ngày
                                    thu</label>
                                <input type="date" class="form-control"
                                       placeholder="Tên học sinh"
                                       name="nameStudent">
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col">
                                <label for="nameStudent" class="form-label">Học phí</label>
                                <input type="text" class="form-control"
                                       placeholder="Tên học sinh"
                                       name="nameStudent">
                            </div>
                        </div>
                        {{--                        <div class="row g-3">--}}
                        {{--                            <div class="col">--}}
                        {{--                                <label for="statusStudent" class="form-label">Khoản--}}
                        {{--                                    thu</label>--}}
                        {{--                                <select--}}
                        {{--                                    class="col form-select mb-3 form-select form-control"--}}
                        {{--                                    name="statusStudent">--}}
                        {{--                                    <option selected class="form-control">-- Học phí--}}
                        {{--                                        ----}}
                        {{--                                    </option>--}}
                        {{--                                    <option value="1" class="form-control">One</option>--}}
                        {{--                                    <option value="2" class="form-control">Two</option>--}}
                        {{--                                    <option value="3" class="form-control">Three--}}
                        {{--                                    </option>--}}
                        {{--                                </select>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="col">--}}
                        {{--                                <label for="nameClass" class="form-label">Số--}}
                        {{--                                    tiền</label>--}}
                        {{--                                <input type="number" class="form-control"--}}
                        {{--                                       placeholder="Số tiền"--}}
                        {{--                                       name="phoneStudent">--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        <div class="row g-3">
                            <div class="col">
                                <label for="idClass" class="form-label">Thực thu</label>
                                <input type="number" class="form-control"
                                       placeholder="Mã SV"
                                       name="id">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Ghi
                                chú</label>
                            <textarea class="form-control"
                                      id="exampleFormControlTextarea1"
                                      rows="3"></textarea>
                        </div>
                        <div class="row g-3">
                            <div class="col">
                                <label for="idClass" class="form-label">Tên học
                                    sinh</label>
                                <input type="number" class="form-control"
                                       placeholder="Mã SV"
                                       name="id">
                            </div>
                            <div class="col">
                                <label for="nameStudent" class="form-label">Mã
                                    SV</label>
                                <input type="text" class="form-control"
                                       placeholder="Lý do ..."
                                       name="nameStudent">
                            </div>
                            <div class="col">
                                <label for="nameStudent" class="form-label">Số điện
                                    thoại</label>
                                <input type="text" class="form-control"
                                       placeholder="Lý do ..."
                                       name="nameStudent">
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col">
                                <label for="idClass" class="form-label">Tên người thu</label>
                                <input type="number" class="form-control"
                                       placeholder="Mã SV"
                                       name="id">
                            </div>
                        </div>
                        <hr>
                    </div>
                    {{--                                    --}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">
                        Đóng
                    </button>
                    <button type="button" class="btn btn-primary">Sửa</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{--Modal Add tuition--}}
<div class="modal fade" id="staticBackdropAdd" data-bs-backdrop="static"
     data-bs-keyboard="false"
     tabindex="-1" aria-labelledby="staticBackdropLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="">
                <div class="modal-header">
                    <h1 class="modal-title fs-6" id="staticBackdropLabel">Form thêm hóa
                        đơn</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{--                                    --}}
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col">
                                <label for="idClass" class="form-label">Mã phiếu</label>
                                <input type="text" class="form-control"
                                       placeholder="Mã SV"
                                       name="id" disabled>
                            </div>
                            <div class="col">
                                <label for="nameStudent" class="form-label">Ngày
                                    thu</label>
                                <input type="date" class="form-control"
                                       placeholder="Tên học sinh"
                                       name="nameStudent">
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col">
                                <label for="nameStudent" class="form-label">Học phí</label>
                                <input type="text" class="form-control"
                                       placeholder="Tên học sinh"
                                       name="nameStudent">
                            </div>
                                <div class="col">
                                    <label for="idClass" class="form-label">Thực thu</label>
                                    <input type="number" class="form-control"
                                           placeholder="Mã SV"
                                           name="id">
                                </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Ghi
                                chú</label>
                            <textarea class="form-control"
                                      id="exampleFormControlTextarea1"
                                      rows="3"></textarea>
                        </div>
                        <div class="row g-3">
                            <div class="col">
                                <label for="idClass" class="form-label">Tên học
                                    sinh</label>
                                <input type="number" class="form-control"
                                       placeholder="Mã SV"
                                       name="id">
                            </div>
                            <div class="col">
                                <label for="nameStudent" class="form-label">Mã
                                    SV</label>
                                <input type="text" class="form-control"
                                       placeholder="Lý do ..."
                                       name="nameStudent">
                            </div>
                            <div class="col">
                                <label for="nameStudent" class="form-label">Số điện
                                    thoại</label>
                                <input type="text" class="form-control"
                                       placeholder="Lý do ..."
                                       name="nameStudent">
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col">
                                <label for="idClass" class="form-label">Tên người thu</label>
                                <input type="number" class="form-control"
                                       placeholder="Mã SV"
                                       name="id">
                            </div>
                        </div>
                        <hr>
                    </div>
                    {{--                                    --}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">
                        Đóng
                    </button>
                    <button type="button" class="btn btn-primary">Thêm</button>
                </div>
            </form>
        </div>
    </div>
</div>
