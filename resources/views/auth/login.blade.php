@extends('layouts.app')

@section('content')
<div class="auth-wrapper">
    <div class="auth-card">

        <h1 class="auth-title">Welcome Back</h1>
        <p class="auth-subtitle">Login to continue reading</p>

        @if($errors->any())
            <div class="auth-error">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="auth-form">
            @csrf

            <div class="auth-group">
                <label>Email</label>
                <input type="email" name="email" required autocomplete="email">
            </div>

            <div class="auth-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>

            <button type="submit" class="auth-btn">Login</button>
        </form>

        <p class="auth-footer">
            Don’t have an account?
            <a href="{{ route('register') }}">Register</a>
        </p>

    </div>
</div>
@endsection

