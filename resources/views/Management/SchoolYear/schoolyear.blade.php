@extends('layouts.app')

@section('custom_styles')

@endsection

@section('content')
    @include('Management.SchoolYear.addSchoolyear')
    @include('Management.SchoolYear.editSchoolyear')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Niên khóa</h5>

                    <!-- Button trigger modal Add-->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdropAdd">
                        Thêm mới
                    </button>

                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">Số thứ tự</th>
                                    <th scope="col">Niên khóa</th>
                                    <th scope="col">Hành Động</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse ($schoolYears as $f)
                                    <tr>
                                        <td>{{$f->id}}</td>
                                        <td>{{$f->number_course}}</td>
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
