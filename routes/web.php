<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\confirme_studentController;
use App\Http\Controllers\student_demandeController;
use App\Http\Controllers\demandesController;
use App\Http\Controllers\demandeController;
use App\Http\Controllers\treat_demandeController;
use App\Http\Controllers\create_rooms;
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
//login
Route::get('/login',[loginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login',[loginController::class, 'submit'])->name('login')->middleware('guest');
//register
Route::get('/register',[registerController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register',[registerController::class, 'submit'])->name('register')->middleware('guest');
//logout
Route::get('/logout',[logoutController::class, 'logout'])->name('logout')->middleware('auth');
//home
Route::get('/home',[homeController::class, 'index'])->name('home')->middleware('auth');

//confirme_student //student part
Route::post('/confirme_student',[confirme_studentController::class, 'confirme_student'])->name('confirme_student')->middleware('auth');

//student demande
    //for new students
Route::get('/home/demande',[student_demandeController::class, 'index'])->name('student_demande')->middleware('student');
    //for old pre registerd students
Route::get('/home/demande/registered',[student_demandeController::class, 'index_registered'])->name('student_demande_registered')->middleware('student');

    //rout to receve demande
Route::post('/home/demande/send',[student_demandeController::class, 'send_demande'])->name('send_demande')->middleware('student');



//admin part
Route::get('/home/demandes',[demandesController::class, 'index'])->name('admin_demandes')->middleware('admin');

//check demande
Route::post('/home/demandes/check',[demandeController::class, 'check_demande'])->name('check_demande')->middleware('admin');

//treat demande
Route::post('/home/demandes/treat/apr',[treat_demandeController::class, 'apr'])->name('apr')->middleware('admin');
Route::post('/home/demandes/treat/dis',[treat_demandeController::class, 'dis'])->name('dis')->middleware('admin');

//creat rooms
Route::get('/home/create_rooms',[create_rooms::class, 'index'])->name('create_rooms')->middleware('admin');

// info page

Route::get('/info', function () {
    return view('info_page');
})->name('info');

Route::get('/', function () {
    return view('landing');
})->name('landing');
