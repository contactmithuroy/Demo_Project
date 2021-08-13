@extends('layouts.master')
@section('page_title','Dashboard')
{{-- @section('','active') --}}
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Profile Details </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Profile</li>
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

                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <!--Section: Block Content-->
                            <section class="mb-5">
                              <div class="row d-flex justify-content-between mt-3">
                                <div class="col-md-6 mb-4 mb-md-0 ">
                                  <div id="mdb-lightbox-ui"></div>
                                  <div class="mdb-lightbox">
                                    <div class="row product-gallery mx-1 d-flex justify-content-end">
                                      <div class="col-12 mb-0 ">
                                        <figure class="view overlay rounded z-depth-1 main-img">
                                          <a href="#"
                                             >
                                            <img src="{{ asset('storage/users/avatar.jpg') }}" width="200px" height="200px"
                                              class="img-fluid z-depth-1">
                                          </a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
          
                                <div class="col-md-6 pl-2">
                                  <div class="row">
                                    <div class="col-md-12">
                                      
                                        <h4> {{ strtoupper($user->name) ?? ''}}</h4>
                                        {{-- <p><span class="mr-1"><strong>{{ $product->user_id ?? '' }}</strong></span></p> --}}
                                        
                                        <div class="table-responsive">
                                          <table class="table table-sm table-borderless mb-0">
                                            <tbody>
                                              <tr>
                                                <th class="pl-0 w-25" scope="row"><strong>Email</strong></th>
                                                <td> {{ $user->email ?? '' }}</td>
                                              </tr>
                                              <tr>
                                                <th class="pl-0 w-25" scope="row"><strong>Role</strong></th>
                                                <td><span class="badge-secondary btn-xs">{{ $user->role ?? '' }}</span> </td>
                                              </tr>
        
                                            </tbody>
                                          </table>
                                        </div>                               
                                    </div>
                            
                                  </div>
                                </div>
                              </div>
                            </section>
          
                          </div>
                         <!--  <product-create></product-create> -->
                         <!-- /.card-body -->
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>    
        </div><!-- /.container-fluid -->
    </section>
      <!-- /.content -->
@endsection
