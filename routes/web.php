<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserdetailsController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContributorController;

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register',[AuthController::class,'register']);
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login',[AuthController::class,'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');



Route::middleware(['auth'])->group(function(){
Route:: view('/','home');
//subjects
Route::view('/medical','subjects.medical');
Route::view('/computer','subjects.computer');
Route::view('/science','subjects.science');
Route::view('/english','subjects.english');
Route::view('/geography','subjects.geography');
Route::view('/gk','subjects.gk');
Route::view('/history','subjects.history');
Route::view('/poltical','subjects.poltical');
Route::view('/reasoning','subjects.reasoning');
Route::view('/maths','subjects.maths');
Route::view('/state','subjects.state');
Route::view('/ssc','subjects.ssc');
Route::view('/about','about');
Route::get('/contributors', [ContributorController::class, 'index']);
Route::view('contact','contact');
});

Route::view('adminlogin','admin.adminlogin');
Route::post('admincheck',[AdminController::class,'admincheck']);

Route::middleware('admin')->group(function () {
    Route::get('admin/dashboard', [AdminController::class,'dashboard']);
    // Yahan contributor CRUD, analytics wagaira bhi daal sakta hai

Route::view('contributorform','admin.contributor-form');
Route::post('/store-contributors', [ContributorController::class, 'store']);

Route::get('userdetail',[UserdetailsController::class,'index']);
Route::get('/live-users', [UserdetailsController::class, 'fetchUsers'])->name('live.users');

Route::get('deletedata/{id}',[UserdetailsController::class,'destroy']);

Route::get('editdata/{id}',[UserdetailsController::class,'edit']);

Route::put('/updatedata/{id}', [UserdetailsController::class, 'update'])->name('user.update');

});



Route::get('admin/logout', function () {
    session()->forget('admin_logged_in');
    return redirect('adminlogin')->with('message', 'Logged out');
});

