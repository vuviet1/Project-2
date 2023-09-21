<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Danh sách học sinh/ Học viên</h5>
                <a type="button" style="margin-bottom: 30px" class="btn btn-primary m-1" href="{{route('addstudent')}}">Add</a>
                <br>
                <br>
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">Số thứ tự</th>
                                <th scope="col">Mã SV</th>
                                <th scope="col">Họ và tên</th>
                                <th scope="col">Ngày sinh</th>
                                <th scope="col">Điện thoại</th>
                                <th scope="col">Trạng thái</th>
                                <th scope="col">Lớp học</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(!empty($student))
                                @foreach($student as $key => $item)
                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <td>{{$item->student_code}}</td>
                                <td>{{$item->name_student}}</td>
                                <td>{{$item->birthday}}</td>
                                <td>{{$item->phone_number}}</td>
                                <td>{{$item->status}}</td>
                                <td>{{$item->name_class}}</td>
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
