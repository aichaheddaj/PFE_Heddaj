<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ChartController;

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
    return view('Welcome');
});
Route::post('/SignUp',[AuthController::class ,'registerUser'])->name('registeruser');

Route::get('dashboard', function(){
return view('dashboard');
});
Route::get('/SignIn', function () {
    return view('Login');
})->name('Login');

Route::get('/SignUp',[AuthController::class ,'registration']);
Route::post('/SignUp',[AuthController::class ,'registerUser'])->name('registeruser');
Route::post('/loginuser',[AuthController::class,'loginuser'])->name('loginuser');


Route::get('/pieChart',[ChartController::class ,'pieChart'])->name('pie');
Route::get('/pieCharts',[ChartController::class ,'piegraphe'])->name('piegraphe');
Route::get('/lineCharts',[ChartController::class ,'linegraphe'])->name('linegraphe');

Route::get('/pieChartForm',[ChartController::class ,'pieChartForm'])->name('pieform');
Route::post('/pieChart',[ChartController::class ,'pieChartpost'])->name('piepost');
Route::post('/lineChart',[ChartController::class ,'lineChartpost'])->name('linepost');
Route::get('/lineChartForm',[ChartController::class ,'lineChartForm'])->name('lineform');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/task',function(){
return view('tache');
})->name('tache');
Route::get('/tasksList',[TaskController::class , 'index']);

Route::get('/tasks/edit/{id}',[TaskController::class , 'edit']);

Route::patch('/tasks/edit/{id}',[TaskController::class , 'update']);

Route::post('/tasksList',[TaskController::class , 'store']);

Route::delete('/tasks/{id}',[TaskController::class , 'destroy']);

    
Route::get('/editor',[PostController::class,'index']);
Route::get('create',[PostController::class,'create']);
Route::post('post',[PostController::class,'store']);
Route::get('show/{id}',[PostController::class,'show']);
Route::get('edit/{id}',[PostController::class,'edit']);
Route::post('update/{id}',[PostController::class,'update']);
Route::get('delete/{id}',[PostController::class,'destroy']);

Route::get('{path}', function(){
    return view('spa');
})->where('path','(.*)');