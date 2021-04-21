<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\UploadFileController;
use App\Http\Controllers\MailSend;
use App\Http\Controllers\RegController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\DB;
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
    return view('main');
});
Route::get('/lang/{lang}',function($lang){
 	App::setlocale($lang);
 	return view('main');
});
Route::get('/langs/{lang}',function($lang){
 	App::setlocale($lang);
 	return view('book');
});
Route::get('/uploadfile',[UploadFileController::class,'index']);
Route::post('/uploadfile',[UploadFileController::class,'show']);

Route::get('techSupport',[MailSend::class,'mailView']);
Route::post('techSupport',[MailSend::class,'mailSend']);
Route::get('registration',function(){
	return view('registration');
});
Route::post('registration',[RegController::class,'addData']);
Route::get('login',function(){
	return view('login');
});
Route::get('/book/{id}',function(){
	return view('book',['data'=>DB::table('uploads')->where('id',1)->get()]);
});
Route::post('login',[RegController::class,'loginData']);

Route::post('store',[RegController::class,'uploadFile']);
Route::get('review', function () {
    return view('review');
});

Route::post('download{file}',[UserController::class,'download']);
Route::get('view/{id}',[UserController::class,'view']);