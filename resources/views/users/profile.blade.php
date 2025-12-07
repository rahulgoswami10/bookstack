@extends('layouts.app')

@section('content')

<h1 class="page-title">Profile Page</h1>

@if(session('success'))
    <div class="alert success">
        {{ session('success') }}
    </div>
@endif

<div class="profile-wrapper">

    {{-- LEFT: Basic Details --}}
    <div class="profile-card">
        <h2>Update Profile</h2>

        <form action="{{ route('user.profile.update') }}" method="POST">
            @csrf
            @method('PATCH')

            <label>Name</label>
            <input type="text" name="name" value="{{ $user->name }}" required>

            <label>Email</label>
            <input type="email" name="email" value="{{ $user->email }}" required>

            <button type="submit" class="btn primary">Save Changes</button>
        </form>
    </div>

    {{-- RIGHT: Password Change --}}
    <div class="profile-card">
        <h2>Change Password</h2>

        <form action="{{ route('user.password.update') }}" method="POST">
            @csrf
            @method('PATCH')

            <label>Current Password</label>
            <input type="password" name="current_password" required>

            <label>New Password</label>
            <input type="password" name="new_password" required>

            <label>Confirm New Password</label>
            <input type="password" name="new_password_confirmation" required>

            <button type="submit" class="btn primary">Update Password</button>
        </form>
    </div>

</div>

@endsection
