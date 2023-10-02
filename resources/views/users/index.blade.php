@extends('layouts.app')

@section('content')
    @include('users.addUser')
    @include('users.editUser')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Users</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <!-- Button trigger modal Add-->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdropAdd">
                    Thêm mới
                </button>
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
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
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
                        @endforeach
                        </tbody>
                    </table>

                    {{ $users->links() }}

                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
