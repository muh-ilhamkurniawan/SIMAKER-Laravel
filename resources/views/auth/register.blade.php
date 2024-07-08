@extends('layouts.auth')

@section('title', 'Daftar')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card col-lg-5 col-md-6 col-10 mx-auto my-3 pt-5 shadow-sm">
        <h1 class="h6 mb-3 text-center">Register</h1>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group">
                    <label for="name" class="sr-only">{{ __('Name') }}</label>
                    <input id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Full Name" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="username" class="sr-only">{{ __('Username') }}</label>
                    <input id="username" type="text" class="form-control form-control-lg @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" placeholder="Username" required autocomplete="username">
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password" class="sr-only">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password-confirm" class="sr-only">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-lg btn-primary btn-block">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
            <div class="text-center">
                Have an account?
                <a href="/login">Login</a>
                <p class="mt-2 text-muted ">© 2024</p>
            </div>
        </div>
    </div>
</div>
@endsection
