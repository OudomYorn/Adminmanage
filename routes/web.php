<?php

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
    return view('frmMain');
});
Route::get('useraccount/index','UserAccountController@index');//list data
Route::get('useraccount/form','UserAccountController@form');//form inser
Route::post('useraccount/insert','UserAccountController@insert'); //insert
Route::get('useraccount/edit/{id}','UserAccountController@edit'); //form edit
Route::post('useraccount/update','UserAccountController@update'); //update
Route::get('useraccount/delete/{id}','UserAccountController@delete');//delete

Route::get('student/index','StudentController@index');//list data
Route::get('student/form','StudentController@form');//form inser
Route::post('student/insert','StudentController@insert'); //insert
Route::get('student/edit/{id}','StudentController@edit'); //form edit
Route::post('student/update','StudentController@update'); //update
Route::get('student/delete/{id}','StudentController@delete');//delete

Route::get('subjects/index','SubjectController@index');//list data
Route::get('subjects/form','SubjectController@form');//form inser
Route::post('subjects/insert','SubjectController@insert'); //insert
Route::get('subjects/edit/{id}','SubjectController@edit'); //form edit
Route::post('subjects/update','SubjectController@update'); //update
Route::get('subjects/delete/{id}','SubjectController@delete');//delete

Route::get('skill/index','SkillController@index');
Route::get('skill/form','SkillController@form');
Route::post('skill/insert','SkillController@insert');
Route::get('skill/delete/{id}','SkillController@delete');
Route::post('skill/update','SkillController@update'); //update
Route::get('skill/edit/{id}','SkillController@edit');