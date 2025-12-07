<?php

use App\Http\Controllers\Admin\UserController;
use App\Models\Book;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;

// Route::get('/', function () {
//     return view('welcome');
// });

// Public homepage – list books
Route::get('/', [BookController::class, 'index'])->name('books.index');


/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/dashboard', function () {

            $recentBooks = Book::orderBy('created_at', 'desc')
                ->take(5)
                ->get();

            return view('admin.dashboard', compact('recentBooks'));

        })->name('dashboard');


        // ✅ Admin book management (NO show route)
        Route::resource('books', BookController::class)
            ->except(['show']);

        
        Route::get('/users', [UserController::class, 'index'])
            ->name('users.index');

        Route::patch('/users/{user}/block', [UserController::class, 'block'])
            ->name('users.block');

        Route::patch('/users/{user}/unblock', [UserController::class, 'unblock'])
            ->name('users.unblock');
        
        Route::delete('/users/{user}', [UserController::class, 'destroy'])
            ->name('users.destroy');

        Route::get('/books/{book}', [BookController::class, 'edit'])
            ->name('books.edit');

        Route::put('/books/{book}', [BookController::class, 'update'])
            ->name('books.update');

        Route::delete('/books/{book}', [BookController::class, 'destroy'])
            ->name('books.destroy');

});


Route::get('/books/{book}', [BookController::class, 'show'])
    ->name('books.show');


Route::middleware(['auth'])
    ->prefix('user')
    ->name('user.')
    ->group(function() {

        Route::get('/profile', [UserProfileController::class, 'index'])
            ->name('profile');

        Route::patch('/profile/update', [UserProfileController::class, 'updateProfile'])
            ->name('profile.update');

        Route::patch('/profile/password', [UserProfileController::class, 'updatePassword'])
            ->name('password.update');
    });