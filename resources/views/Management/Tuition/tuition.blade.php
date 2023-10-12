@extends('layouts.app')

@section('custom_styles')

@endsection

@section('content')
    @include('Management.Tuition.add')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Danh sách thu phí</h5>

                    <!-- Button trigger modal Add-->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdropAdd">
                        Thêm mới
                    </button>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold mb-4">Danh sách học sinh/sinh viên</h5>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">Số thứ tự</th>
                                    <th scope="col">Mã SV</th>
                                    <th scope="col">Họ và tên</th>
                                    <th scope="col">Số lần đóng</th>
                                    <th scope="col">Số tiền đã đóng</th>
                                    <th scope="col">Số đợt đóng</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse ($tuition as $f)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>BKC {{$f->id_student}}</td>
                                        <td>{{$f->name}}</td>
                                        <td>{{$f->payment_times}}</td>
                                        <td>{{$f->fee}}</td>
                                        <td>{{$f->school_payment_times}}</td>
                                        <td>
                                            <!-- Button to trigger the modal Edit-->
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#staticBackdropEdit{{$f->id}}">
                                                Sửa
                                            </button>
                                            @include('Management.Tuition.edit')
                                            <form action="{{ route('delete.tuition')}}" method="post">
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
