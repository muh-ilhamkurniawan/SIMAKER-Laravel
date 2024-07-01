@extends('layouts.auth')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card col-lg-5 col-md-6 col-10 mx-auto my-3 pt-5 shadow-sm">
        <a class="navbar-brand mx-auto mt-2 flex-fill text-center mb-3">
            <img src="{{ asset('images/kai.svg') }}" alt="">
        </a>
        <h1 class="h2 text-center">SIMAKER</h1>
        <h1 class="h6 mb-4 text-center">Sistem Informasi Manajemen Keterlambatan Kereta</h1>
        <h1 class="h6 mb-3 text-center">Login</h1>
        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <label for="username" class="sr-only">{{ __('Username') }}</label>
                    <input id="username" type="text" class="form-control form-control-lg @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" placeholder="Username" required autocomplete="username" autofocus>
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password" class="sr-only">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-lg btn-primary btn-block">
                        {{ __('Login') }}
                    </button>
                </div>

                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </form>
            <p class="mt-2 text-muted text-center">© 2024</p>
        </div>
    </div>
</div>
@endsection
