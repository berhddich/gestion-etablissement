<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Routes Web Principales
|--------------------------------------------------------------------------
*/

// ✅ Route par défaut : redirection selon authentification
Route::get('/', function () {
    if (!auth()->check()) {
        return redirect('/login');
    }

    $role = auth()->user()->role;

    return match ($role) {
        'admin' => redirect('/dashboard'),
        'teacher' => redirect('/teachers'),
        'student' => redirect('/students'),
        default => redirect('/dashboard'),
    };
});

// ✅ Authentification (sans Breeze)
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Routes protégées (utilisateur connecté)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    // ✅ Tableau de bord
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // ✅ Gestion Livres / Étudiants / Enseignants
    Route::resource('books', BookController::class);
    Route::resource('students', StudentController::class);
    Route::resource('teachers', TeacherController::class);
});

/*
|--------------------------------------------------------------------------
| Routes réservées à l’admin
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::resource('users', UserController::class);
});
