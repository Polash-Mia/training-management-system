<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InstituteController;
use  App\Http\Controllers\UserController;
use App\Http\Controllers\GovtcourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;

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

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/about', [HomeController::class,'about'])->name('about');
Route::get('/course', [HomeController::class,'course'])->name('course');
Route::get('/course/detail', [HomeController::class,'detail'])->name('course-detail');
Route::get('/register-page', [HomeController::class,'register'])->name('student.register');
Route::get('/contact', [HomeController::class,'contact'])->name('contact');

Route::middleware(['teacher'])->group(function(){

    Route::get('/teacher/add', [TeacherController::class,'index'])->name('teacher.add')->middleware('teacher');
    Route::post('/teacher/create', [TeacherController::class,'create'])->name('teacher.create');
    Route::get('/teacher/manage', [TeacherController::class,'manage'])->name('teacher.manage');
    Route::get('/teacher/edit/{id}', [TeacherController::class,'edit'])->name('teacher.edit');
    Route::post('/teacher/update/{id}', [TeacherController::class,'update'])->name('teacher.update');
    Route::get('/teacher/delete/{id}', [TeacherController::class,'delete'])->name('teacher.delete');
});

    // Route::get('/teacher/add', [TeacherController::class,'index'])->name('teacher.add')->middleware('teacher');
    // Route::post('/teacher/create', [TeacherController::class,'create'])->name('teacher.create');
    // Route::get('/teacher/manage', [TeacherController::class,'manage'])->name('teacher.manage');
    // Route::get('/teacher/edit/{id}', [TeacherController::class,'edit'])->name('teacher.edit');
    // Route::post('/teacher/update/{id}', [TeacherController::class,'update'])->name('teacher.update');
    // Route::get('/teacher/delete/{id}', [TeacherController::class,'delete'])->name('teacher.delete');



    Route::get('/course/add', [CourseController::class,'index'])->name('course.add');
    Route::post('/course/create', [CourseController::class,'create'])->name('course.create');
    Route::get('/course/manage', [CourseController::class,'manage'])->name('course.manage');
    Route::get('/course/edit/{id}', [CourseController::class,'edit'])->name('course.edit');
    Route::post('/course/update/{id}', [CourseController::class,'update'])->name('course.update');
    Route::get('/course/delete/{id}', [CourseController::class,'delete'])->name('course.delete');


Route::middleware([
'auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

    Route::get('/institute/add', [InstituteController::class,'index'])->name('institute.add');
    Route::post('/institute/create', [InstituteController::class,'create'])->name('institute.create');
    Route::get('/institute/manage', [InstituteController::class,'manage'])->name('institute.manage');
    Route::get('/institute/edit/{id}', [InstituteController::class,'edit'])->name('institute.edit');
    Route::post('/institute/update/{id}', [InstituteController::class,'update'])->name('institute.update');
    Route::get('/institute/delete/{id}', [InstituteController::class,'delete'])->name('institute.delete');


    Route::get('/govtcourse/add',[GovtcourseController::class,'index'])->name('govtcourse.add');
    Route::post('/govtcourse/create', [GovtcourseController::class,'create'])->name('govtcourse.create');
    Route::get('/govtcourse/manage', [GovtcourseController::class,'manage'])->name('govtcourse.manage');
    Route::get('/govtcourse/edit/{id}', [GovtcourseController::class,'edit'])->name('govtcourse.edit');
    Route::post('/govtcourse/update/{id}', [GovtcourseController::class,'update'])->name('govtcourse.update');
    Route::get('/govtcourse/delete/{id}', [GovtcourseController::class,'delete'])->name('govtcourse.delete');




    // Route::get('/offercourse/manage', [GovtcourseController::class,'manageOffer'])->name('offer-course.manage');



    // Route::get('/redirects',[UserController::class,'index']);

});
