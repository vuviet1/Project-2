@extends('layouts.app')

@section('custom_styles')

@endsection

@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Niên khóa</h5>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                        Thêm mới
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false"
                         tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Form thêm niên khóa</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="card-body">
                                        <div class="row g-3">
                                            <div class="col">
                                                <label for="idClass" class="form-label">Mã niên khóa</label>
                                                <input type="text" class="form-control"
                                                       placeholder="Mã niên khóa"
                                                       name="id" disabled>
                                            </div>
                                            <div class="col">
                                                <label for="nameStudent" class="form-label">Niên khóa</label>
                                                <input type="date" class="form-control"
                                                       placeholder="Niên khóa"
                                                       name="number_course">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary">Thêm mới</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    {{-- End modal--}}

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
                                            <!-- Button to trigger the modal -->
                                            <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                                    data-bs-target="#staticBackdrop">Open Modal
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
