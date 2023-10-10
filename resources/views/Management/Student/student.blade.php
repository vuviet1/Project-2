@extends('layouts.app')

@section('custom_styles')

@endsection

@section('content')
    @include('Management.Student.add')
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
                                    <th scope="col">Trạng thái</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse ($student as $f)
                                    <tr>
                                        <td>{{$f->id}}</td>
                                        <td>{{$f->name}}</td>
                                        <td>@if ($f->school_payment_times >= $f->payment_times)
                                            Hoàn thành
                                            @else
                                            Nợ học phí
                                        @endif</td>
                                        <td>
                                            <!-- Button to trigger the modal Edit-->
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdropEdit{{$f->id}}">
                                                Sửa
                                            </button>
                                            @include('Management.Student.edit')
                                            <form action="{{ route('delete.student')}}" method="post">
                                                @csrf
                                                <input hidden name="id" value="{{$f->id}}">
                                                <button type="submit" class="btn btn-danger">
                                                    Xóa
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <th>Không có dữ liệu</th>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
