@extends('layouts.app')

@section('custom_styles')

@endsection

@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Niên khóa</h5>

                    <!-- Button to trigger the modal -->
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Launch Static Backdrop Modal</button>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Static Backdrop Modal</h5>
                                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Add content for the modal body here -->
                                    Content goes here...
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                                    <button class="btn btn-primary" type="button">Understood</button>
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
                                            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Open Modal</button>
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
