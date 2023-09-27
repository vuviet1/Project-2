@extends('layouts.app')

@section('custom_styles')

@endsection

@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Chuyên ngành</h5>
{{--                    <a type="button" style="margin-bottom: 30px" class="btn btn-primary m-1" href="{{route('class.add')}}">Add</a>--}}
                    <br>
                    <br>
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">Số thứ tự</th>
                                    <th scope="col">Tên chuyên ngành</th>
                                    <th scope="col">Chương trình học</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
{{--                                @if(!empty($classList))--}}
{{--                                    @foreach($classList as $key => $item)--}}
{{--                                        <tr>--}}
{{--                                            <td hidden>{{$item->id_class}}</td>--}}
{{--                                            <td>{{$key+1}}</td>--}}
{{--                                            <td>{{$item->name_class}}</td>--}}
{{--                                            <td>{{$item->training_route}}</td>--}}
{{--                                            <td>{{$item->name_majors}}</td>--}}
{{--                                            <td>{{$item->number_course}}</td>--}}
{{--                                            <td><a class="btn btn-warning m-1" href="{{route('class.edit',['id'=>$item->id_class])}}">Sửa</a>--}}
{{--                                                <a onclick="return confirm('Ban co chac chan muon xoa hay khong?')" class="btn btn-danger m-1" href="{{route('class.destroy',['id'=>$item->id_class])}}">Xóa</a>--}}
{{--                                            </td>--}}
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
