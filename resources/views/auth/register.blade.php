@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row  justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="col-sm-10 offset-1 mt-3 text-center">
                                <h3 class="text-primary">Welcome to Demo Admin Register Page </h3>
                                <p>Register your account.</p>
                            </div>
                               <div class="col-sm-12 mt-3">
                                    <div class="input-group flex-nowrap">
                                        <input id="name" type="text" placeholder="Name"  class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-12 mt-3">
                                    <div class="input-group flex-nowrap">
                                        <input id="email" type="text" placeholder="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-12 mt-3">
                                    <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-sm-12 mt-3">
                                    <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>



                                <div class="col-sm-12 mt-3">
                                    <div class="input-group flex-nowrap ml-4">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>

                                    </div>
                                </div>
                                <div class="col-sm-12 mt-3">
                                <button  type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
                                </div>
                                
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
