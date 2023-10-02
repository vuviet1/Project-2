@extends('layouts.app')

@section('custom_styles')

@endsection

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Danh sách thu phí</h5>



                    <div class="card">



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
                                    <th scope="col">Lớp học</th>
                                    <th scope="col">Số lần đóng</th>
                                    <th scope="col">Số tiền đã đóng</th>
                                    <th scope="col">Tổng tiền</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
{{--                                @if(!empty($student))--}}
{{--                                    @foreach($student as $key => $item)--}}
{{--                                        <tr>--}}
{{--                                            <th scope="row">{{$key+1}}</th>--}}
{{--                                            <td>{{$item->student_code}}</td>--}}
{{--                                            <td>{{$item->name_student}}</td>--}}
{{--                                            <td>{{$item->phone_number}}</td>--}}
{{--                                            <td>{{$item->name_class}}</td>--}}
{{--                                            <td><a type="button" style="margin-bottom: 30px" class="btn btn-primary m-1" href="{{route('addtuition')}}">Add</a></td>--}}
{{--                                        </tr>--}}
{{--                                    @endforeach--}}
{{--                                @endif--}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
