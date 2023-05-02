<?php

use App\Http\Controllers\AddsalaryController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmpmoneyController;
use App\Http\Controllers\FormalController;
use App\Http\Controllers\HoliController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\LeaveresoneController;
use App\Http\Controllers\SalaryminusController;
use Illuminate\Support\Facades\Route;

Route::resource('employee',EmployeeController::class )->middleware(['auth', 'verified']);
Route::resource('addsalary',AddsalaryController::class )->middleware(['auth', 'verified']);
Route::resource('salayminus',SalaryminusController::class )->middleware(['auth', 'verified']);
Route::resource('leavereson',LeaveresoneController::class )->middleware(['auth', 'verified']);
Route::resource('holi',HoliController::class )->middleware(['auth', 'verified']);
Route::resource('formal',FormalController::class )->middleware(['auth', 'verified']);
