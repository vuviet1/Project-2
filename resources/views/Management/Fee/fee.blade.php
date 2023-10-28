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

                    <hr>
                    <form method="get" action="{{ route('search.fee') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label"><b>Tìm kiếm theo niên khoá</b></label>
                            <div class="col-sm-10">
                                <input autocomplete="off" name="search" type="text" class="form-control"  placeholder="Nhập tìm kiếm" value="{{$search ?? ''}}">
                            </div>
                        </div>
                        <button type="submit" hidden></button>
                        @if(!empty($feeCount))
                            <div>
                                <p>Kết quả tìm kiếm</p>
                            </div>
                        @endif
                    </form>

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
                                        @if($f->school_payment_times <30)
                                        <td>
                                            <div class="d-flex">
                                            <!-- Button to trigger the modal Edit-->
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#staticBackdropEdit{{$f->id}}" style="margin-right: 20px">
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
                                            </div>
                                        </td>
                                        @else
                                        <td>
                                            <button type="button" class="btn btn-success">
                                                Đã hoàn Thành
                                            </button>
                                        </td>
                                        @endif
                                    </tr>
                                @empty

                                    <th>Không có dữ liệu</th>
                                @endforelse
                                </tbody>
                            </table>
                            {{ $fee->appends(['search' => $search ?? ''])->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
