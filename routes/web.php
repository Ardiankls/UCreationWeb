<?php

use App\Http\Controllers\CreationController;

//Import Admin Controller
use App\Http\Controllers\admin\CourseController as AdminCourseController;
use App\Http\Controllers\admin\CreationController as AdminCreationController;
use App\Http\Controllers\admin\DepartmentController as AdminDepartmentController;
use App\Http\Controllers\admin\JakaController as AdminJakaController;
use App\Http\Controllers\admin\LecturerController as AdminLecturerControllerAlias;
use App\Http\Controllers\admin\PageController as AdminPageController;
use App\Http\Controllers\admin\StaffController as AdminStaffController;
use App\Http\Controllers\admin\StudentController as AdminStudentController;
use App\Http\Controllers\admin\TitleController as AdminTitleController;
use App\Http\Controllers\admin\UserController as AdminUserController;
use App\Http\Controllers\admin\YearController as AdminYearController;

//Import Lecturer Controller
use App\Http\Controllers\lecturer\CourseController as LecturerCourseController;
use App\Http\Controllers\lecturer\CreationController as LecturerCreationController;
use App\Http\Controllers\lecturer\DepartmentController as LecturerDepartmentController;
use App\Http\Controllers\lecturer\JakaController as LecturerJakaController;
use App\Http\Controllers\lecturer\LecturerController as LecturerLecturerController;
use App\Http\Controllers\lecturer\PageController as LecturerPageController;
use App\Http\Controllers\lecturer\StaffController as LecturerStaffController;
use App\Http\Controllers\lecturer\StudentController as LecturerStudentController;
use App\Http\Controllers\lecturer\TitleController as LecturerTitleController;
use App\Http\Controllers\lecturer\UserController as LecturerUserController;
use App\Http\Controllers\lecturer\YearController as LecturerYearController;

//Import Staff Controller
use App\Http\Controllers\staff\CourseController as StaffCourseController;
use App\Http\Controllers\staff\CreationController as StaffCreationController;
use App\Http\Controllers\staff\DepartmentController as StaffDepartmentController;
use App\Http\Controllers\staff\JakaController as StaffJakaController;
use App\Http\Controllers\staff\LecturerController as StaffLecturerController;
use App\Http\Controllers\staff\PageController as StaffPageController;
use App\Http\Controllers\staff\StaffController as StaffStaffControllerAlias;
use App\Http\Controllers\staff\StudentController as StaffStudentController;
use App\Http\Controllers\staff\TitleController as StaffTitleController;
use App\Http\Controllers\staff\UserController as StaffUserController;
use App\Http\Controllers\staff\YearController as StaffYearController;

//Import Student Controller
use App\Http\Controllers\student\CourseController as StudentCourseController;
use App\Http\Controllers\student\CreationController as StudentCreationController;
use App\Http\Controllers\student\DepartmentController as StudentDepartmentController;
use App\Http\Controllers\student\JakaController as StudentJakaController;
use App\Http\Controllers\student\LecturerController as StudentLecturerController;
use App\Http\Controllers\student\PageController as StudentPageControllerAlias;
use App\Http\Controllers\student\StaffController as StudentStaffController;
use App\Http\Controllers\student\StudentController as StudentStudentController;
use App\Http\Controllers\student\TitleController as StudentTitleController;
use App\Http\Controllers\student\UserController as StudentUserController;
use App\Http\Controllers\student\YearController as StudentYearController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\loginController;
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
//

//Route::get('/', function () {
//
//    return redirect()->route('creation.index');
//});
//Route::get('login', function () {
//    return redirect()->route('auth.login');
//});

Route::get('/', [CreationController::class, 'index'])->name('index');


Auth::routes();

//Route Group untuk admin
Route::group([ 'middleware' => ['admin'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', [AdminCreationController::class, 'index'])->name('index');
    Route::resource('course', AdminCourseController::class);
    Route::resource('department', AdminDepartmentController::class);
    Route::resource('jaka', AdminJakaController::class);
    Route::resource('lecturer', AdminLecturerControllerAlias::class);
    Route::resource('creation', AdminCreationController::class);
    Route::resource('title', AdminTitleController::class);
    Route::resource('year', AdminYearController::class);
    Route::resource('staff', AdminStaffController::class);
    Route::resource('student', AdminStudentController::class);
    Route::resource('user', AdminUserController::class);
});

//route group untuk lecturer
Route::group(['middleware' => ['lecturer'], 'prefix' => 'lecturer', 'as' => 'lecturer.'], function () {
    Route::get('/', [LecturerCreationController::class, 'index'])->name('index');
    Route::resource('course', LecturerCourseController::class);
    Route::resource('department', LecturerDepartmentController::class);
    Route::resource('jaka', LecturerJakaController::class);
    Route::resource('lecturer', LecturerLecturerController::class);
    Route::resource('creation', LecturerCreationController::class);
    Route::resource('title', LecturerTitleController::class);
    Route::resource('year', LecturerYearController::class);
    Route::resource('staff', LecturerStaffController::class);
    Route::resource('student', LecturerStudentController::class);
    Route::resource('user', LecturerUserController::class);
});

Route::group(['middleware' => ['staff'], 'prefix' => 'staff', 'as' => 'staff.'], function () {
    Route::get('/', [StaffCreationController::class, 'index'])->name('index');
    Route::resource('course', StaffCourseController::class);
    Route::resource('department', StaffDepartmentController::class);
    Route::resource('jaka', StaffJakaController::class);
    Route::resource('lecturer', StaffLecturerController::class);
    Route::resource('creation', StaffCreationController::class);
    Route::resource('title', StaffTitleController::class);
    Route::resource('year', StaffYearController::class);
    Route::resource('staff', StaffStaffControllerAlias::class);
    Route::resource('student', StaffStudentController::class);
    Route::resource('user', StaffUserController::class);
});

Route::group(['middleware' => ['student'], 'prefix' => 'student', 'as' => 'student.'], function () {
    Route::get('/', [StudentCreationController::class, 'index'])->name('index');
    Route::resource('course', StudentCourseController::class);
    Route::resource('department', StudentDepartmentController::class);
    Route::resource('jaka', StudentJakaController::class);
    Route::resource('lecturer', StudentLecturerController::class);
    Route::resource('creation', StudentCreationController::class);
    Route::resource('title', StudentTitleController::class);
    Route::resource('year', StudentYearController::class);
    Route::resource('staff', StudentStaffController::class);
    Route::resource('student', StudentStudentController::class);
    Route::resource('user', StudentUserController::class);
});

//Route::resource('creation', \App\Http\Controllers\CreationController::class);
//Route::view('create', 'student.creation.create')->name('createCreation');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
