<?php

use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[StaffController::class,'index'])->name('staff.index');
Route::get('/{id}/delete',[StaffController::class,'delete'])->name('staff.delete');
Route::get('/add',[StaffController::class,'showFormAdd'])->name('staff.showFormAdd');
Route::post('/add',[StaffController::class,'addStaff'])->name('staff.add');
Route::get('{id}/edit',[StaffController::class,'showFormEdit'])->name('staff.showFormEdit');
Route::post('edit',[StaffController::class,'editStaff'])->name('staff.edit');
Route::post('search',[StaffController::class,'search'])->name('staff.search');
