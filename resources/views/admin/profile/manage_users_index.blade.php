@extends('layouts.master')
@section('page_title','Manage User')
@section('manage_user','active')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Manage User </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Manage</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mt-4">
                    <div class="card py-3">
                        <div class="card-header">
                            <div class="row d-flex justify-content-end align-item-center">
                              <div class="col-md-3 d-flex justify-content-end align-item-center">
                                <a href="{{ route('create.user') }}" class="btn btn-primary mb-3"> <i class="fas fa-plus"></i> Create User</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table
                            -striped zero-configuration">
                                <thead>
                                <tr class="text-white font-weight-bold" style="background: linear-gradient(to right, #356b4c, #405d6b);">
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Roles</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php  $count = 0; ?>
                                @foreach ($data as $key => $user)
                                    <tr>
                                        <td>{{ $loop -> index + 1}}</td>
                                        <td><img src="{{ asset('storage/users/avatar.jpg') }}" width="50px" height="50px"
                                            class="img-fluid z-depth-1"></td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            @if( $user->role == 'super_admin')
                                            <label class="badge badge-danger">Super Admin</label>
                                            @elseif($user->role == 'admin')
                                            <label class="badge badge-primary">Admin</label>
                                            @else
                                            <label class="badge badge-success">user</label>
                                            @endif
                                        
                                        </td>
                                        <td class="text-center align-middle">
                                            @canany(['isSuperAdmin', 'isAdmin', 'isUser'])
                                            <a class="btn btn-sm btn-primary" href="{{ route('users.show',$user->id) }}" data-toggle="tooltip" data-placement="top" title="View"><i class="fa fa-eye"></i></a>
                                            @endcanany
                                            @canany(['isSuperAdmin', 'isAdmin'])
                                                <a class="btn btn-sm btn-warning" href="{{ route('manage_users',$user->id) }}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                                            @endcanany
                                            @can('isSuperAdmin')
                                            <a class="btn btn-sm btn-danger" href="{{ route('manage.delete',$user->id) }}" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
                                            @endcan
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>    
        </div><!-- /.container-fluid -->
    </section>
      <!-- /.content -->
@endsection
