<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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



Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'redirect']);
Route::get('/add_doctor_view',[AdminController::class,'add_doctor']);
Route::get('/appointment',[AdminController::class,'appointment']);
Route::post('/upload_doctor',[AdminController::class,'upload_doctor']);
Route::post('/app',[HomeController::class,'app']);
Route::get('/myapp',[HomeController::class,'myapp']);
Route::get('/delete/{id}',[HomeController::class,'delete']);
Route::get('/approved/{id}',[AdminController::class,'approved']);
Route::get('/canceled/{id}',[AdminController::class,'canceled']);
Route::get('/alldoctor',[AdminController::class,'alldoctor']);
Route::get('/update/{id}',[AdminController::class,'update']);
Route::get('/deleted/{id}',[AdminController::class,'deleted']);
Route::post('/edit_doctor/{id}',[AdminController::class,'edit_doctor']);
Route::get('/contact',[HomeController::class,'contact']);
Route::get('/blog',[HomeController::class,'blog']);
Route::get('/doctorview',[HomeController::class,'doctorview']);
Route::get('/about',[HomeController::class,'about']);
Route::get('/details',[HomeController::class,'details']);


















Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
