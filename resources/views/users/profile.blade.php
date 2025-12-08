@extends('layouts.app')

@section('content')
<div class="profile-page">

    <div class="profile-card">

        <div class="profile-avatar">
            <span>{{ strtoupper(substr($user->name, 0, 1)) }}</span>
        </div>

        <h2 class="profile-name">{{ $user->name }}</h2>
        <p class="profile-email">{{ $user->email }}</p>

        <div class="profile-divider"></div>

        {{-- Update Profile --}}
        <form method="POST" action="{{ route('user.profile.update') }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" value="{{ $user->name }}" required>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value="{{ $user->email }}" required>
            </div>

            <button class="btn-primary">Save Changes</button>
        </form>

        <div class="profile-divider"></div>

        {{-- Change Password --}}
        <form method="POST" action="{{ route('user.password.update') }}">
            @csrf
            @method('PATCH')

            <div class="form-group">
                <label>Current Password</label>
                <input type="password" name="current_password" required>
            </div>

            <div class="form-group">
                <label>New Password</label>
                <input type="password" name="new_password" required>
            </div>

            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="new_password_confirmation" required>
            </div>

            <button class="btn-primary">Update Password</button>
        </form>

    </div>
</div>
@endsection

