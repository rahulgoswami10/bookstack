@extends('layouts.app')

@section('content')
<div class="auth-wrapper">
    <div class="auth-card">
        <h1>Create Account</h1>

        @if($errors->any())
            <div class="auth-error">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="auth-group">
                <label>Name</label>
                <input type="text" name="name" required>
            </div>

            <div class="auth-group">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>

            <div class="auth-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>

            <div class="auth-group">
                <label>Confirm Password</label>
                <input type="password" name="password_confirmation" required>
            </div>

            <button class="auth-btn" type="submit">Register</button>
        </form>

        <p class="auth-footer">
            Already have an account?
            <a href="{{ route('login') }}">Login</a>
        </p>
    </div>
</div>
@endsection

