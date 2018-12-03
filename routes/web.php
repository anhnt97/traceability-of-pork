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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/breed-management', 'HomeController@breed')->name('breed-management');
Route::get('/breed-management/get-batches/{batchId}', 'BreedManagementController@getListPigByBatch');
Route::get('/breed-management/get-info-pig/{pigId}', 'BreedManagementController@getInfoPigBasic');
Route::get('/breed-management/get-info-treatment/{pigId}', 'BreedManagementController@getInfoTreatmentByPig');
Route::get('/breed-management/get-list-equipment', 'BreedManagementController@getListEquipment');
Route::get('/process-management', 'HomeController@process')->name('process-management');
