<?php 

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;


class UserController extends Controller {

    public function index() {
        $users = User::latest()->get();

        return view('admin.users.index', compact('users'));
    }

    public function block(User $user) {

        if ($user->id === auth()->id()) {
            return back()->with('error', 'You cannot block yourself');
        }

        $user->update([ 'status' => 'blocked' ]);

        return back()->with('success', 'User blocked successfully');
    }

    public function unblock(User $user) {
        
        $user->update([ 'status' => 'unblocked' ]);

        return back()->with('success', 'User unblocked successfully');
    }

    public function destroy(User $user) {

        if ($user->id() === auth()->id()) {
            return back()->with('error', 'You cannot delete yourself');
        }

        $user->delete();

        return back()->with('success', 'User deleted successfully');
    }
}