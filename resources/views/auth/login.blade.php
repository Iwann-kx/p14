@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<div class="auth-card">
    <div class="auth-card-header">
        <div class="logo-section">
            <i class="fas fa-sign-in-alt"></i>
        </div>
        <h2>{{ __('Login') }}</h2>
        <p>Masuk ke akun Anda</p>
    </div>

    <div class="auth-card-body">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email">{{ __('Email Address') }}</label>
                <input 
                    id="email" 
                    type="email" 
                    class="form-control @error('email') is-invalid @enderror" 
                    name="email" 
                    value="{{ old('email') }}" 
                    required 
                    autocomplete="email" 
                    autofocus
                    placeholder="Masukkan email Anda">

                @error('email')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">{{ __('Password') }}</label>
                <input 
                    id="password" 
                    type="password" 
                    class="form-control @error('password') is-invalid @enderror" 
                    name="password" 
                    required 
                    autocomplete="current-password"
                    placeholder="Masukkan password Anda">

                @error('password')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-check">
                <input 
                    class="form-check-input" 
                    type="checkbox" 
                    name="remember" 
                    id="remember" 
                    {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>

            <button type="submit" class="btn btn-login">
                {{ __('Login') }}
            </button>

            <div class="auth-links">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
                
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">
                        {{ __('Create Account') }}
                    </a>
                @endif
            </div>

            @if (Route::has('register'))
            <div class="auth-footer">
                Belum punya akun? 
                <a href="{{ route('register') }}">{{ __('Daftar di sini') }}</a>
            </div>
            @endif
        </form>
    </div>
</div>
@endsection
