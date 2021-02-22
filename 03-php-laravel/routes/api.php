<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupApiController;
use App\Http\Controllers\LecturerApiController;
use App\Http\Controllers\ScheduleApiController;
use App\Http\Controllers\StudentApiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SupervisorApiController;
use App\Http\Controllers\PublishApiController;
use App\Http\Controllers\TesterApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("user/auth",[AuthController::class,'authenticating']);

Route::get("groups",[GroupApiController::class,'index']);
Route::post("groups/save",[GroupApiController::class,'save']);
Route::put("groups/modify/{id}",[GroupApiController::class,'update']);
Route::delete("groups/remove/{id}",[GroupApiController::class,'delete']);

Route::get("groups/lecturer",[LecturerApiController::class,'index']);
Route::post("groups/lecturer-assign",[LecturerApiController::class,'post']);
Route::put("groups/modify/lecturer/{id}",[LecturerApiController::class,'update']);
Route::delete("groups/remove/lecturer/{id}",[LecturerApiController::class,'delete']);

Route::get('/schedule/index','ScheduleApiController@index');
Route::post('/schedule','ScheduleApiController@create');
Route::put('/schedule/edit/{id}','ScheduleApiController@edit');
Route::delete('/schedule/delete/{id}','ScheduleApiController@delete');

Route::post('/students','StudentApiController@create');
Route::delete('/students/delete/{nim}','StudentApiController@delete');
Route::put('/students/edit/{nim}','StudentApiController@edit');
Route::get('/students/index','StudentApiController@index');

Route::get("supervisor",[SupervisorApiController::class,'index']);
Route::post("supervisor/save",[SupervisorApiController::class,'savesup']);
Route::put("supervisor/modify/{id}",[SupervisorApiController::class,'update']);
Route::delete("supervisor/remove/{id}",[SupervisorApiController::class,'delete']);

Route::delete('/publish/delete/{id}','PublishApiController@delete');
Route::put('/publish/edit/{id}','PublishApiController@edit');
Route::get('/publish/index','PublishApiController@index');

Route::get("tester",[TesterApiController::class,'index']);
Route::post("tester/save",[TesterApiController::class,'savetest']);
Route::put("tester/modify/{id}",[TesterApiController::class,'update']);
Route::delete("tester/remove/{id}",[TesterApiController::class,'delete']);

Route::get('/grade','GradeController@index');
Route::post('grade/save','GradeController@save');

Route::get('/absen','absenController@index');
Route::post('absen/simpan','absenController@simpan');


