@extends('layouts.app')

@section('custom_styles')

@endsection

@section('content')
    @include('Management.Student.add')
    @include('Management.Student.edit')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Danh sách học sinh/ Học viên</h5>

                    <!-- Button trigger modal Add-->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdropAdd">
                        Thêm mới
                    </button>

                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
{{--                                    <th scope="col">Số thứ tự</th>--}}
                                    <th scope="col">Mã SV</th>
                                    <th scope="col">Họ và tên</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse ($student as $f)
                                    <tr>
                                        <td>{{$f->id}}</td>
                                        <td>{{$f->name}}</td>
                                        <td>
                                            <!-- Button to trigger the modal Edit-->
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdropEdit">
                                                Sửa
                                            </button>
                                            <button type="button" class="btn btn-danger">
                                                Xóa
                                            </button>
                                        </td>
                                    </tr>
                                @empty
                                    <th>Không có dữ liệu</th>
                                @endforelse
{{--                                @if(!empty($student))--}}
{{--                                    @foreach($student as $key => $item)--}}
{{--                                        <tr>--}}
{{--                                            <th scope="row">{{$key+1}}</th>--}}
{{--                                            <td>{{$item->student_code}}</td>--}}
{{--                                            <td>{{$item->name_student}}</td>--}}
{{--                                            <td>{{$item->birthday}}</td>--}}
{{--                                            <td>{{$item->phone_number}}</td>--}}
{{--                                            <td>{{$item->status}}</td>--}}
{{--                                            <td>{{$item->name_class}}</td>--}}
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
