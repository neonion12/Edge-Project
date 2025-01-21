<?php
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home2',[PostController::class,'home2'])->name('home2');

Route::get('/create',[PostController::class,'create']);

Route::post('/store',[PostController::class,'ourfilestore'])->name('store');

Route::post('/update/{id}',[PostController::class,'updateData'])->name('update');


Route::get('/edit/{id}',[PostController::class,'editData'])->name('edit');

Route::get('/delete/{id}',[PostController::class,'deleteData'])->name('delete');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
