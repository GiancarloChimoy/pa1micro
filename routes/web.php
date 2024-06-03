<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RedirectIfUserType;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CursoController;

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();
Route::middleware(['auth', 'user.type'])->group(function () {
    Route::get('/admin/home', [AdminController::class, 'index'])->name('admin.home');
    Route::get('/teacher/home', [TeacherController::class, 'index'])->name('teacher.home');
    Route::get('/student/home', [StudentController::class, 'index'])->name('student.home');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::post('/admin/create-user', [AdminController::class, 'store'])->name('users.store');
    Route::post('/cursos', [CursoController::class, 'store'])->name('cursos.store');

});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
