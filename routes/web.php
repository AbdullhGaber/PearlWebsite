<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FirebaseAuthController;
use App\Http\Controllers\HomeController;
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

// Route::get('/welcome', function () {
//     return view('welcome');
// });


Route::group(['prefix'=>'home'],function(){
    Route::get('/' , [HomeController::class , 'index'])->name('home.index');
    Route::get('/contact' , [HomeController::class , 'contact'])->name('home.contact');
});
//dashboard
Route::group(['prefix'=>'dashboard'],function(){
    Route::get('/' , [DashboardController::class , 'index'])->name('dashboard.index');
    Route::get('/schedule' , [DashboardController::class , 'schedule'])->name('dashboard.schedule');
    Route::get('/messages' ,[DashboardController::class , 'messages'])->name('dashboard.messages');
    Route::get('/patients' , [DashboardController::class , 'patients'])->name('dashboard.patients');
    Route::get('/view_branch' ,[DashboardController::class , 'view_branches'])->name('dashboard.view_branch');
    Route::get('/add_branch' , [DashboardController::class , 'create_branches'])->name('dashboard.add_branch');
    Route::get('/profile' ,[DashboardController::class , 'profile'] )->name('dashboard.profile');
    Route::get('/patient_report' ,[DashboardController::class , 'dashboard.patient_report'] )->name('patient_report');

});

Route::group(['prefix'=>'auth'],function(){
    Route::get('/sign_up' ,  [FirebaseAuthController::class , 'first_register'])->name('auth.first_register');
    Route::get('/second_register' , [FirebaseAuthController::class , 'second_register'])->name('auth.second_register');
    Route::get('/third_register' , [FirebaseAuthController::class , 'third_register'])->name('auth.third_register');
    Route::get('/sign_in' , [FirebaseAuthController::class , 'sign_in'])->name('auth.login');

    Route::post('/sign_up' , [FirebaseAuthController::class , 'createUserWithEmailAndPassword'])->name('auth.sign_up');
    Route::post('/sign_in' , [FirebaseAuthController::class , 'signInWithEmailAndPassword'])->name('auth.sign_in');
});


// Route::resource('/products' , ProductController::class);

