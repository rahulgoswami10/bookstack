<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\User;

class DashboardController extends Controller
{
    public function index() {
        
        $totalBooks = Book::count();
        $totalUsers = User::count();

        $recentBooks = Book::latest()->orderBy('created_at', 'desc')
                ->take(5)
                ->get();

        return view('admin.dashboard', compact('totalBooks', 'totalUsers', 'recentBooks'));
    }
}
