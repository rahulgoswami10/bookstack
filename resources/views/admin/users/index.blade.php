@extends('layouts.admin')

@section('content')

<h1 class="page-title">Users</h1>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="users-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>

                <td>
                    @if ($user->status === 'blocked')
                        <span class="badge danger">Blocked</span>
                    @else
                        <span class="badge success">Unblocked</span>
                    @endif
                </td>

                <td class="actions">
                    @if($user->status === 'active')
                        <form method="POST" action="{{ route('admin.users.block', $user) }}">
                            @csrf
                            @method('PATCH')
                            <button class="btn warning">Block</button>
                        </form>
                    @else
                        <form method="POST" action="{{ route('admin.users.unblock', $user) }}">
                            @csrf
                            @method('PATCH')
                            <button class="btn success">Unblock</button>
                        </form>
                    @endif

                    <form method="POST"
                          action="{{ route('admin.users.destroy', $user) }}"
                          onsubmit="return confirm('Delete this user?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
