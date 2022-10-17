<?php

use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'student'],function(){
    Route::get('/',[StudentController::class,'get_all_student']);
    Route::get('/add',[StudentController::class,'create'])->name('student_add');
    Route::post('/add',[StudentController::class,'add']);
    Route::get('/{id}',[StudentController::class,'get_student_by_id'])->name('student_get');
    Route::post('/{id}',[StudentController::class,'edit'])->name('student_edit');
    Route::get('/delete/{id}',[StudentController::class,'delete'])->name('student_delete');
});
