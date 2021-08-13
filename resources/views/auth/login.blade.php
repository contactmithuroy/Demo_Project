@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row  justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row">
                            <div class="col-sm-10 offset-1 mt-3 text-center">
                                <h3 class="text-primary">Welcome to Demo Admin Login Page </h3>
                                <p>Login to your account.</p>
                            </div>
                               <div class="col-sm-12 mt-3">
                                    <div class="input-group flex-nowrap">
                                        <input id="email" type="text" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                    <div class="input-group flex-nowrap ml-4">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>

                                    </div>
                                </div>
                                <div class="col-sm-12 mt-3">
                                <button  type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                                </div>
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Create new account') }}</a>
                           
                            <div class="col-sm-12 mt-3">
                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <td width="50%">superadmin@gmail.com</td>
                                        <td width="30%" >1234</td>
                                        <td width="20%">  <a href="javascript:void(0)" class="btn btn-primary btn-sm " id="copyEmail">Copy</a></td>
                                    </tr>
                                    <tbody>
                                </table>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script>
        $( document ).ready(function() {
            $( "#copyEmail" ).click(function() {
             $("#email").val("super_admin@gmail.com");
             $("#password").val("123");

        });
        });
    </script>
@endsection