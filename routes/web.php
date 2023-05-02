<?php

use App\Http\Controllers\ProfileController;
use App\Models\Employee;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('admin.admin');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/admin.php';



require __DIR__.'/auth.php';
Route::get('/', function () {
    return view('aya.index');
});

Route::get('/employer', function () {
    $employers = Employee::all();
    return view('aya.employer',compact('employers'));
});
Route::get('/holiday', function () {
    return view('aya.holiday');
});
Route::get('/invite', function () {
    return view('aya.invite');
});
Route::get('/leave', function () {
    return view('aya.leave');
});
Route::get('/salaryadd', function () {
    return view('aya.salaryadd');
});
Route::get('/salaryminus', function () {
    return view('aya.salaryminus');
});

