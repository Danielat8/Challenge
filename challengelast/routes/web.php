<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatchController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\PlayerController;
use App\Http\Controllers\User\GuestController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\UserMatchController;
use App\Http\Controllers\AdminMatchController;
use App\Http\Middleware\GuestMiddleware;


// Example route definition
Route::middleware(['auth', GuestMiddleware::class])->group(function () {
    Route::get('/guest', [GuestController::class, 'index'])->name('user.guest.index');
});


Route::middleware(['auth', AdminMiddleware::class])->name('admin.')->group(function () {
    Route::get('matches/index', [AdminMatchController::class, 'index'])->name('matches.index');
    Route::get('matches/create', [AdminMatchController::class, 'create'])->name('matches.create');
    Route::post('matches', [AdminMatchController::class, 'store'])->name('matches.store');
    Route::get('matches/{id}/edit', [AdminMatchController::class, 'edit'])->name('matches.edit');
    Route::put('matches/{id}', [AdminMatchController::class, 'update'])->name('matches.update');
    Route::delete('matches/{id}', [AdminMatchController::class, 'destroy'])->name('matches.destroy');
    // teams
    Route::get('/teams', [TeamController::class, 'index'])->name('admin.teams.index');
    Route::get('teams', [TeamController::class, 'index'])->name('teams.index');
    Route::get('teams/create', [TeamController::class, 'create'])->name('teams.create');
    Route::post('teams', [TeamController::class, 'store'])->name('teams.store');
    Route::get('teams/{team}/edit', [TeamController::class, 'edit'])->name('teams.edit');
    Route::put('teams/{team}', [TeamController::class, 'update'])->name('teams.update');
    Route::delete('teams/{team}', [TeamController::class, 'destroy'])->name('teams.destroy');
    // players
    Route::get('players', [PlayerController::class, 'index'])->name('players.index');
    Route::get('players/create', [PlayerController::class, 'create'])->name('players.create');
    Route::post('players', [PlayerController::class, 'store'])->name('players.store');
    Route::get('players/{player}/edit', [PlayerController::class, 'edit'])->name('players.edit');
    Route::put('players/{player}', [PlayerController::class, 'update'])->name('players.update');
    Route::delete('players/{player}', [PlayerController::class, 'destroy'])->name('players.destroy');
});



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
