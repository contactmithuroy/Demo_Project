@extends('layouts.master')
@section('page_title','Edit User')
@section('edit_manage_user','active')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Edit User </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('manage.user') }}">User</a></li>
                <li class="breadcrumb-item active">User</li>
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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class=" d-flex justify-content-end align-item-center ">
                                <a href="{{ route('manage.user') }}" class="btn btn-primary"> Back To Users</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="card card-primary card-outline">
                                <div class="row">
                                    <div class="col-12 col-lg-6 col-md-8 offset-lg-3 offset-md-2">
                                        <!-- form start -->
                                        <form role="form" action="{{ route('manage_user.store') }}" id="create_category" method="post">
                                            @csrf
                                            @method('post')
                                            <div class="row mt-5 ml-2 mr-2">
                                                <div class="col-md-8 offset-md-2">
                                                    <div class="form-group">
                                                        <label for="name">Name<span class="text-danger">*</span></label>
                                                        <input type="name" value="{{ $user->name }}" name="name" class="form-control" id="name" placeholder="Enter name" >
                                                        @if ($errors->has('name'))
                                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-8 offset-md-2">
                                                    <div class="form-group">
                                                        <label for="email">Email<span class="text-danger">*</span></label>
                                                        <input type="email" value="{{ $user->email }}" name="email" class="form-control" id="email" placeholder="Enter email" >
                                                        @if ($errors->has('email'))
                                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-8 offset-md-2">
                                                    <div class="form-group">
                                                        <label for="password">Password<span class="text-danger">*</span></label>
                                                        <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" >
                                                        @if ($errors->has('password'))
                                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
         
                                                <div class="col-md-8 offset-md-2">
                                                    <div class="form-group">
                                                        <label for="role"> Role</label>
                                                        <select name="role" id="role" class="form-control" required>
                                                            <option value="" style="display: none" selected >Select Role</option>
                                                            @can('isSuperAdmin')
                                                            <option value="super_admin">Super Admin</option>
                                                            @endcan
                                                            <option value="admin">Admin</option>
                                                            <option value="user">User</option>
                                                            
                                                         </select>
                                                    </div>
                                                </div>

                                                {{-- <div class="col-md-8 offset-md-2">
                                                    <div class="form-group">
                                                    <label for="image">Image</label>
                                                    <div class="input-group">
                                                       <div class="custom-file">
                                                          <input type="file" name="image" class="custom-file-input" id="image">
                                                          <label class="custom-file-label" for="image">Choose Image</label>
                                                       </div>
                                                       <div class="input-group-append">
                                                       </div>
                                                    </div>
                                                </div> --}}

                                                <div class="col-md-8 offset-md-2 mt-3 mb-3">
                                                    <input type="hidden" name="id" value="{{ $user->id }}">
                                                    <button type="submit" id="submit" class="btn btn-primary">Submit</button>
                                                </div>
        
                                            </div>
                                            <!-- /.card-body -->               
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>    
        </div><!-- /.container-fluid -->
    </section>
      <!-- /.content -->
@endsection