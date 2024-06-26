<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\FirebaseAuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Kreait\Firebase\Auth;
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



Route::get('/test-firebase', function (Auth $auth) {
    try {
        $user = $auth->getUser('eZr22HhbdJMlGJ7RgYwmy6tmz4P2');
        return response()->json($user);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()]);
    }
});
//auth
Route::group(['prefix'=>'auth'],function(){
    Route::get('/sign_up' ,  [FirebaseAuthController::class , 'first_register'])->name('auth.first_register');
    Route::get('/second_register' , [FirebaseAuthController::class , 'second_register'])->name('auth.second_register');
    Route::get('/third_register' , [FirebaseAuthController::class , 'third_register'])->name('auth.third_register');
    Route::get('/sign_in' , [FirebaseAuthController::class , 'sign_in'])->name('auth.login');
    Route::post('/logout' , [FirebaseAuthController::class , 'logout'])->name('auth.logout');
    Route::post('/firstRegister' , [FirebaseAuthController::class , 'firstRegister'])->name('auth.firstRegister');
    Route::post('/sign_up' , [FirebaseAuthController::class , 'createUserWithEmailAndPassword'])->name('auth.sign_up');
    Route::post('/sign_in' , [FirebaseAuthController::class , 'signInWithEmailAndPassword'])->name('auth.sign_in');
});


Route::group(['prefix'=>'home'],function(){
    Route::get('/' , [HomeController::class , 'index'])->name('home.index');
    Route::get('/contact' , [HomeController::class , 'contact'])->name('home.contact');
});

//dashboard
Route::middleware('firebase.auth')->name('dashboard.')->prefix('/dashboard')->group(function() {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
    Route::get('/schedule', [DashboardController::class, 'schedule'])->name('schedule');
    Route::get('/messages', [DashboardController::class, 'messages'])->name('messages');
    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');
    Route::put('/profile/{uid}', [DashboardController::class, 'updateProfile'])->name('updateProfile');
    Route::get('/patient_report', [DashboardController::class, 'patient_report'])->name('patient_report');
});

//branch
Route::middleware('firebase.auth')->name('branches.')->prefix('/branches')->group(function() {
    Route::get('/view_branches', [BranchController::class, 'viewBranches'])->name('view_branches');
    Route::get('/add_branch', [BranchController::class, 'addBranch'])->name('add_branch');
    Route::post('/store_branch', [BranchController::class, 'storeBranch'])->name('store_branch');
    Route::delete('/delete_branch', [BranchController::class, 'deleteBranch'])->name('delete_branch');
    Route::put('/branch/{branchId}', [BranchController::class, 'updateBranch'])->name('updateBranch');
    Route::get('/branch/{branchId}/edit', [BranchController::class, 'editBranch'])->name('editBranch');
});

//patient
Route::middleware('firebase.auth')->name('patients.')->prefix('/patients')->group(function() {
    Route::get('/patients', [PatientController::class, 'viewPatients'])->name('patients');
});







