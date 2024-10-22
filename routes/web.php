<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|


*/


Route::redirect('/','/note')->name('dashboard');

Route::get('/welcome', function () {
    return view('welcome');
});



Route::middleware(['auth','verified'])->group(function ()  {
   // Route::get('/note',[NoteController::class,'index'])->name('note.index');
// Route::get('/note/create',[NoteController::class,'create'])->name('note.create');
// Route::post('/note',[NoteController::class,'store'])->name('note.store');
// Route::get('/note/{id}',[NoteController::class,'show'])->name('note.show');
// Route::get('/note/{id}/edit',[NoteController::class,'edit'])->name('note.edit');
// Route::put('/note/{id}',[NoteController::class,'update'])->name('note.update');
// Route::delete('/note/{id}',[NoteController::class,'destroy'])->name('note.destroy');

//alternative way of doing this route

Route::resource('note', NoteController::class);

//this line of code will act those 7 routes 
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
