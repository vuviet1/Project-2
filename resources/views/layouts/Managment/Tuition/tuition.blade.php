<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Danh sách thu phí</h5>
                <a type="button" style="margin-bottom: 30px" class="btn btn-primary m-1" href="{{route('addtuition')}}">Add</a>
                <br>
                <br>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold mb-4">Lọc theo:</h5>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Chương trình học</label>
                            <select class="col form-select mb-3 form-select form-control" name="statusStudent">
                                <option selected class="form-control">-- Chương trình học --</option>
                                @if(!empty($education_program))
                                    @foreach($education_program as $key => $item)
                                        <option value="" class="form-control">{{$item->training_route}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Chuyên ngành</label>
                            <select class="col form-select mb-3 form-select form-control" name="statusStudent">
                                <option selected class="form-control">-- Chuyên ngành --</option>
                                @if(!empty($majors))
                                    @foreach($majors as $key => $item)
                                        <option value="" class="form-control">{{$item->name_majors}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Khóa học/Năm học</label>
                            <select class="col form-select mb-3 form-select form-control" name="statusStudent">
                                <option selected class="form-control">-- Khóa học/Năm học --</option>
                                @if(!empty($course))
                                    @foreach($course as $key => $item)
                                <option value="" class="form-control">{{$item->number_course}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Lớp</label>
                            <select class="col form-select mb-3 form-select form-control" name="statusStudent">
                                <option selected class="form-control">-- Lớp --</option>
                                @if(!empty($class))
                                    @foreach($class as $key => $item)
                                        <option value="" class="form-control">{{$item->name_class}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <button type="button" class="btn btn-info m-1">Refresh</button>
                        <button type="button" class="btn btn-success m-1">Search</button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold mb-4">Danh sách học sinh/sinh viên</h5>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">Số thứ tự</th>
                                <th scope="col">Mã SV</th>
                                <th scope="col">Họ và tên</th>
                                <th scope="col">Điện thoại</th>
                                <th scope="col">Lớp học</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(!empty($student))
                                @foreach($student as $key => $item)
                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <td>{{$item->student_code}}</td>
                                <td>{{$item->name_student}}</td>
                                <td>{{$item->phone_number}}</td>
                                <td>{{$item->name_class}}</td>
                                <td><a type="button" style="margin-bottom: 30px" class="btn btn-primary m-1" href="{{route('addtuition')}}">Add</a></td>
                            </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
