<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WorshipSessionController;
use App\Models\WorshipSession;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\CustomRegisterController;
use App\Http\Controllers\EmailController;
use FontLib\Table\Type\name;
use App\Http\Controllers\PythonController;
use App\Http\Controllers\PatientsController;

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



Auth::routes();

Route::get('/', function () {
    return view('auth.login'); // This route points to the login view
}); //Routes by Pempho



//Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::middleware(['auth'])->group(function () {
    // routes/web.php
    Route::get('/patients', [PatientsController::class, 'index'])->name('patients.all');
    Route::get('/form', [PatientsController::class, 'form'])->name('patients.form');
   
    Route::get('/patients/{id}', [PatientsController::class, 'show'])->name('patients.show');
    Route::get('/patients/create', [PatientsController::class, 'create'])->name('patients.create');

    Route::post('/patients', [PatientsController::class, 'store'])->name('patients.store');
    Route::get('/patient/{id}/form', [PatientsController::class, 'showForm'])->name('patient.form');
    Route::post('/form/submit', [PatientsController::class, 'submit'])->name('form.submit');

    // Route::get('/patients/{id}/edit', [PatientsController::class, 'edit'])->name('patients.edit');
    // Route::put('/patients/{id}', [PatientsController::class, 'update'])->name('patients.update');
    // Route::delete('/patients/{id}', [PatientsController::class, 'destroy'])->name('patients.destroy');



    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/attendance', [AttendanceController::class, 'showAttendance'])->name('attendance');



    Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');



    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/attendance', [AttendanceController::class, 'showAttendance'])->name('attendance');
    Route::get('/generate-qrcodes', [AttendanceController::class, 'generateQRCodes']);
    Route::get('/calculate-attendance-percentages', [AttendanceController::class, 'calculateAttendancePercentage'])->name('attendance.calculate');
    Route::get('/students/create', [AttendanceController::class, 'create'])->name('student.create');
    Route::get('/students', [AttendanceController::class, 'storre'])->name('students.store');
    // Define the registration route with a name
    Route::post('/students', [AttendanceController::class, 'storee'])->name('students.store');


    Route::get('/register', [HomeController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [HomeController::class, 'register'])->name('register_user');

    Route::get('users/{id}/edit', [HomeController::class, 'edit'])->name('users.edit');
    Route::put('users/{id}', [HomeController::class, 'update'])->name('users.update');





    // Route::get('/calculate-attendance-percentages', 'AttendanceController@calculateAttendancePercentage')->name('attendance.calculate');



    Route::post('/profile/update-image', [HomeController::class, 'updateImage'])->name('update-profile-image');
 

    // routes/web.php



    Route::get('/profile/upload-image', [HomeController::class, 'showUploadForm'])->name('upload-profile-image');
   
});

Route::get('/view-results', [EmailController::class, 'viewResults'])->name('view.results');


Route::get('/python-form', [PythonController::class, 'showForm'])->name('python.form');
Route::post('/calculate-sum', [PythonController::class, 'calculateSum'])->name('calculate.sum');
Route::get('/test-command', [PythonController::class, 'testCommand'])->name('test.command');
