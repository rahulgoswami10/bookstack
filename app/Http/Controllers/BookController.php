<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BookController extends Controller
{
    // show all the published books to admin and users
    public function index () {

        $books = Book::latest()->get();
        return view('books.index', compact('books'));

    }

    // show create book form to admin only
    public function create () {

        return view('books.create');

    }

    public function store (Request $request) {

        $request->validate([
            
            'title' => 'required|string|max:255',
            "description" => 'required|string',
            'cover_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',

        ]);

        $coverImagePath = null;

        if ($request->hasFile('cover_image')) {
            $coverImagePath = $request->file('cover_image')->store('books', 'public');
        }

        Book::create([

            'title' => $request->title,
            'description' => $request->description,
            'cover_image' => $coverImagePath,
            'created_by' => Auth::id(), //admin id

        ]);

        return redirect()->route('books.index')->with('success', 'Book created successfully');

    }

    // Show edit form (admin only)
    public function edit () {

        return view('books.edit', compact('book'));

    }

    public function update (Request $request, Book $book) {

        $request->validate([
            
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'cover_image' => 'nullable|image|mimes:jpg,jpeg,png|max;2048',

        ]);

        if ($request->hasFile('cover_image')) {
            $book->cover_image = $request->file('cover_image')->store('books', 'public');
        }

        $book->update([

            'title' => $request->title,
            'description' => $request->description,
            'cover_image' => $book->cover_image,

        ]);

        return redirect()->route('books.index')->with('success', 'Book updated successfully');

    }

    // Delete book (admin only)
    public function destroy () {

        $book->delete();
        
        return redirect()->route('books.index')->with('success', 'Book deleted successfully');

    }
}
