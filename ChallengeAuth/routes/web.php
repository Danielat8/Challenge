<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DiscussionController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CustomLoginController;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\WelcomeController;


// Route for Welcome 
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

// Dashboard route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



//  Admin routes
Route::middleware([AdminMiddleware::class])->prefix('admin')->group(function () {
    Route::get('/discussions', [AdminController::class, 'index'])->name('admin.discussions.index');
    Route::get('/discussions/create', [DiscussionController::class, 'create'])->name('admin.discussions.create');
    Route::post('/discussions', [DiscussionController::class, 'store'])->name('admin.discussions.store');
    Route::put('/discussions/{discussion}/approve', [AdminController::class, 'approve'])->name('admin.discussions.approve');
    Route::put('/discussions/{discussion}/reject', [AdminController::class, 'reject'])->name('admin.discussions.reject');
    Route::get('/discussions/{discussion}/edit', [AdminController::class, 'edit'])->name('admin.discussions.edit');
    Route::put('/discussions/{discussion}', [AdminController::class, 'update'])->name('admin.discussions.update');
    Route::delete('/discussions/{discussion}', [AdminController::class, 'destroy'])->name('admin.discussions.destroy');
    Route::post('/comments', [CommentController::class, 'store'])->name('admin.comments.store');
});

// User routes
Route::middleware(['auth'])->group(function () {
    Route::get('/discussions/create', [DiscussionController::class, 'create'])->name('discussions.create');
    Route::get('/discussions/{discussion}/edit', [DiscussionController::class, 'edit'])->name('discussions.edit');
    Route::put('/discussions/{discussion}', [DiscussionController::class, 'update'])->name('discussions.update');
    Route::delete('/discussions/{discussion}', [DiscussionController::class, 'destroy'])->name('discussions.destroy');
    Route::post('/discussions', [DiscussionController::class, 'store'])->name('discussions.store');
    Route::get('/discussions', [DiscussionController::class, 'index'])->name('discussions.index');
    Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
    Route::put('/comments/{id}', [CommentController::class, 'update'])->name('comments.update');
    Route::delete('/comments/{id}', [CommentController::class, 'destroy'])->name('comments.destroy');
});
Route::get('/discussions/{id}', [DiscussionController::class, 'show'])->name('discussions.show');
// Comment routes
Route::middleware(['auth'])->prefix('auth')->group(function () {
    Route::get('/comments/create/{discussion_id}', [CommentController::class, 'create'])->name('comments.create');
    Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
    Route::get('/comments/{id}/edit', [CommentController::class, 'edit'])->name('comments.edit');
    Route::put('/comments/{id}', [CommentController::class, 'update'])->name('comments.update');
    Route::delete('/comments/{id}', [CommentController::class, 'destroy'])->name('comments.destroy');
});

// Profile routes
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


require __DIR__ . '/auth.php';
