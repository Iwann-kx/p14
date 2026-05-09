@extends('layouts.auth')

@section('title', 'Register')

@section('content')
<div class="auth-card">
    <div class="auth-card-header">
        <div class="logo-section">
            <i class="fas fa-user-plus"></i>
        </div>
        <h2>{{ __('Register') }}</h2>
        <p>Buat akun baru</p>
    </div>

    <div class="auth-card-body">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <label for="name">{{ __('Name') }}</label>
                <input 
                    id="name" 
                    type="text" 
                    class="form-control @error('name') is-invalid @enderror" 
                    name="name" 
                    value="{{ old('name') }}" 
                    required 
                    autocomplete="name" 
                    autofocus
                    placeholder="Masukkan nama lengkap Anda">

                @error('name')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

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
                    autocomplete="new-password"
                    placeholder="Masukkan password">

                @error('password')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                <input 
                    id="password-confirm" 
                    type="password" 
                    class="form-control" 
                    name="password_confirmation" 
                    required 
                    autocomplete="new-password"
                    placeholder="Ulangi password Anda">
            </div>

            <button type="submit" class="btn btn-login">
                {{ __('Register') }}
            </button>

            <div class="auth-footer">
                Sudah punya akun? 
                <a href="{{ route('login') }}">{{ __('Login di sini') }}</a>
            </div>
        </form>
    </div>
</div>
@endsection
