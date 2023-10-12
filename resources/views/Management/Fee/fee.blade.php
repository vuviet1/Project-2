@extends('layouts.app')

@section('custom_styles')

@endsection

@section('content')
    @include('Management.Fee.add')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Danh sách đợt đóng</h5>

                    <!-- Button trigger modal Add-->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdropAdd">
                        Thêm mới
                    </button>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold mb-4">Danh sách đợt đóng</h5>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">Số thứ tự</th>
                                    <th scope="col">Số đợt đóng</th>
                                    <th scope="col">Tổng tiền phải đóng</th>
                                    <th scope="col">Tên chuyên ngành</th>
                                    <th scope="col">Niên khóa</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse ($fee as $f)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$f->school_payment_times}}</td>
                                        <td>{{$f->original_fee}}</td>
                                        <td>{{$f->majors_name}}</td>
                                        <td>{{$f->number_course}}</td>
                                        <td>
                                            <!-- Button to trigger the modal Edit-->
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#staticBackdropEdit{{$f->id}}">
                                                Sửa
                                            </button>
                                            @include('Management.Fee.edit')
                                            <form action="{{ route('delete.fee')}}" method="post">
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
