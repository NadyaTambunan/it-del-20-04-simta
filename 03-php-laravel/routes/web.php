<?php

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

Route::get('/index', function () {
    return view('index');
});

Route::get('/','AuthController@index')->name('login');
Route::post('/auth','AuthController@auth')->name('auth');
Route::get('/logout', 'AuthController@logout')->name('logout');
Route::get('index', 'StudentController@show')->name('show');



Route::get('/groups', 'GroupController@index')->name('group');
Route::get('/groups/create','GroupController@create');
Route::post('/save','GroupController@save');
Route::put('/group/edit/{id}','GroupController@edit');
Route::get('/group/delete/{id}','GroupController@delete');
Route::get('/group/editform/{id}','GroupController@editform');


Route::get('/groups/lecturer', 'LecturerController@index');
Route::get('groups/lecturer/create','LecturerController@create');
Route::post('/add','LecturerController@add');
Route::put('/lecturer/edit/{id}','LecturerController@edit');
Route::get('/lecturer/editform/{id}','LecturerController@editform');
Route::get('/lecturer/delete/{id}','LecturerController@delete');

Route::get('/schedule/index','ScheduleController@index');
Route::get('/schedule/create', 'ScheduleController@create');
Route::post('/schedule/save','ScheduleController@save');
Route::put('/schedule/edit/{id}', 'ScheduleController@edit');
Route::get('/schedule/editform/{id}', 'ScheduleController@editform');
Route::get('/schedule/delete/{id}', 'ScheduleController@delete');

Route::get('tester','TesterController@index')->name('supervisor');
Route::get('/tester/create', 'TesterController@create');
Route::post('/tester/save','TesterController@savetest');
Route::put('/tester/edit/{id}', 'TesterController@edit');
Route::get('/tester/editform/{id}', 'TesterController@editform');
Route::get('/tester/delete/{id}', 'TesterController@delete');

Route::get('/students/index', 'StudentController@index');
Route::get('/students/create', 'StudentController@create');
Route::post('/students/save','StudentController@save');
Route::post('/students/edit', 'StudentController@edit');
Route::get('/students/editform/{nim}', 'StudentController@editform');
Route::get('/students/delete/{nim}', 'StudentController@delete');

Route::get('supervisor','SupervisorController@index')->name('supervisor');
Route::get('/supervisor/create', 'SupervisorController@create');
Route::post('/simpan','SupervisorController@savesup');
Route::put('/supervisor/edit/{id}', 'SupervisorController@edit');
Route::get('/supervisor/editform/{id}', 'SupervisorController@editform');
Route::get('/supervisor/delete/{id}', 'SupervisorController@delete');

Route::get('/grade', 'GradeController@index')->name('grade');
Route::get('/grade/new-grade','GradeController@new');
Route::post('/save','GradeController@save');

//Route::get('/report','reportcontroller@index');
//Route::post('/save','reportcontroller@save');

Route::get('/absen', 'absenController@index')->name('absen');
Route::get('/absen/new-absen','absenController@new');
Route::post('/simpan','absenController@save');

Route::get('/publish/index', 'PublishController@index');
Route::post('/publish/edit', 'PublishController@edit');
Route::get('/publish/editform/{id}', 'PublishController@editform');
Route::get('/publish/delete/{id}', 'PublishController@delete');

Route::get('/view-jadwal', function (){
    return view('view-jadwal');
});

Route::get('/upload-laporan', function (){
    return view('upload-laporan');
});

Route::get('/upload-artefak', function (){
    return view('upload-artefak');
});


Route::get('/upload-artefak', function (){
    return view('upload-artefak');
});


Route::get('/setting', function (){
    return view('setting');
});
