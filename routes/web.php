<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/home', [TaskController::class, 'index'])->name('home');
Route::post('/home/add', [TaskController::class, 'createTask'])->name('add_task');

Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::post('/category/add', [CategoryController::class, 'createCategory'])->name('add_category');
Route::get('/categoria/editar/{id}', [CategoriaController::class, 'updateCategoryView'])->name('editar_category.view');
Route::delete('/categoria/eliminar/{id}', [CategoriaController::class, 'deleteCategory'])->name('eliminar_category');

require __DIR__.'/auth.php';    
