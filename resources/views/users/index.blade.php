@extends('layouts.app')

@section('content')
    @include('users.addUser')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tài khoản</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">

                <div class="d-flex">
                    <!-- Button trigger modal Add-->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdropAdd">
                        Thêm mới
                    </button>
                    <div class="flex-grow-1"></div>
                    <form action="{{ route('export.user') }}" method="post" style="margin-right: 10px">
                        @csrf
                        <button type="submit" class="btn btn-info">Tải xuống file Exel mẫu</button>
                    </form>
                    <form action="{{ route('import.user')}}" id="formImport" method="post" enctype="multipart/form-data"
                          class="me-3">
                        @csrf
                        <input onchange="document.getElementById('formImport').submit()"
                               type="file" id="file" name="fileExel" hidden>
                        <button onclick="document.getElementById('file').click()"
                                type="button" class="btn btn-success">Cập nhật thông tin sinh viên
                        </button>
                    </form>
                </div>

                <hr>
                <form method="get" action="{{ route('search.user') }}">
                    @csrf
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label"><b>Tìm kiếm</b></label>
                        <div class="col-sm-10">
                            <input autocomplete="off" name="search" type="text" class="form-control"  placeholder="Nhập tìm kiếm" value="{{$search ?? ''}}">
                        </div>
                    </div>
                    <button type="submit" hidden></button>
                    @if(!empty($userCount))
                        <div>
                            <p>Kết quả tìm kiếm</p>
                        </div>
                    @endif
                </form>

            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Họ và tên</th>
                            <th>Email</th>
                            <th>Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($user as $f)
                            <tr>
                                <td>{{ $f->name }}</td>
                                <td>{{ $f->email }}</td>
                                <td>
                                    <!-- Button to trigger the modal Edit-->
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#staticBackdropEdit{{$f->id}}">
                                        Sửa
                                    </button>
                                    @include('users.editUser')
                                    <form action="{{ route('delete.user')}}" method="post">
                                        @csrf
                                        <input hidden name="id" value="{{$f->id}}">
                                        <button type="submit" class="btn btn-danger">
                                            Xóa
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

{{--                    {{ $user->links() }}--}}
                    {{ $user->appends(['search' => $search ?? ''])->links() }}

                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
