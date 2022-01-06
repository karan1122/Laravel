<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\regcontroller;

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

Route::get('/', function () {
    return view('login');
});
 Route::get('/', function () {
     return view('userside');
 });


Route::get('/userside', [regcontroller::class,'userdisplay']);


Route::get('/index', [regcontroller::class,'index']);
Route::post('/index', [regcontroller::class,'login'])->name('test');

//userside

//Route::post('/userans' , [regcontroller::class ,'answer'] );
Route::post('/pollanswer', [regcontroller::class,'Answer_reg']);
Route::get('/pollanswer/{id}' , [regcontroller::class ,'poolanswer'] );

//home redirect
Route::get('/home', [regcontroller::class,'gethome']);

//add poll redirect
Route::get('/addpoll', [regcontroller::class,'addpoll']);
Route::post('/addpollchk', [regcontroller::class,'addpollchk'])->name('addpoll');


//display poll
Route::get('/activepoll',[regcontroller::class,'activepoll']);
Route::get('/displaydata',[regcontroller::class,'displaydata']);


//active
Route::get('/editdata/{id}',[RegController::class,'editdata']); 

//Route::get('/userpoll',[RegController::class,'editdisp']); 
