<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('register',[RegisterController::class,'register']);
Route::post('register',[RegisterController::class,'postRegister'])->name('register');


Route::get('login',[LoginController::class,'login'])->name('getLogin');
Route::post('login',[LoginController::class,'postLogin'])->name('post-login');


Route::middleware(['auth'])->group(function(){

    Route::get('/home',[HomeController::class,'index'])->name('home');

    Route::resource('student',StudentController::class);
    Route::get('/logout',[LogoutController::class,'logout'])->name('logout');
    Route::get('/all-exam',[ExamController::class,'index']);
    Route::get('/show-exam/{id}',[ExamController::class,'show']);
    Route::get('/exam-delete/{id}',[ExamController::class,'examDelete']);
    Route::post('/show-exam/{id}',[ExamController::class,'examUpdate']);
    Route::get('/exams',[ExamController::class,'creteExam']);
    Route::post('/exams',[ExamController::class,'insertExamRecord']);

});





