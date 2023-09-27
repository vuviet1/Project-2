@extends('layouts.app')

@section('custom_styles')

@endsection

@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Niên khóa</h5>
                    
                    <br>
                    <br>
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
