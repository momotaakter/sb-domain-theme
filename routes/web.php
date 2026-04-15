<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\StudentController;
use App\Http\Controllers\backend\StudentController as BackendStudentController;
use App\Http\Controllers\Backend\TestingGuirdController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Home Route
Route::get('/', function () {
    return view('welcome');
})->name('home');

 //just practise gurid system route 
         Route::get('testing', [TestingGuirdController::class, 'index'])->name('testing.index') ->middleware('auth');



   Route::get('index', [StudentController::class, 'index'])->name('studentINFO.index');
   Route::get('create', [StudentController::class, 'create'])->name('studentINFO.create');
   Route::post('store', [StudentController::class, 'store'])->name('studentINFO.store');
   Route::get('edit/{id}',  [StudentController::class, 'edit'])->name('studentINFO.edit');
   Route::put('update/{id}',  [StudentController::class, 'update'])->name('studentINFO.update');
   Route::delete('delete/{id}',  [StudentController::class, 'destroy'])->name('studentINFO.destroy');


// Redirect default dashboard to custom admin dashboard after login
Route::get('/dashboard', function () {
    return redirect()->route('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// ==========================
// Admin Routes
// ==========================
Route::middleware(['auth', 'verified'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        // Admin Dashboard
        Route::get('/', [BackendController::class, 'index'])->name('dashboard');

        // ==========================
        // Profile Routes
        // ==========================
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


        // ==========================
        // Student CRUD Routes
        // ==========================
    


     

    });


// Authentication Routes (Laravel Breeze / Jetstream / UI)
require __DIR__ . '/auth.php';