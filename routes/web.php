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
Route::get('/get-list-farm', 'HomeController@getListFarm')->name('glf');
Route::get('/breed-management', 'HomeController@breed')->name('breed-management');

Route::get('/breed-management/get-batches/{batchId}', 'BreedManagementController@getListPigByBatch');
Route::get('/breed-management/breed-info/{batchId}', 'BreedManagementController@getBreedInfo')->name('breed-info');
Route::get('/breed-management/import-info/{batchId}', 'BreedManagementController@getImportInfo')->name('import-info');
Route::get('/breed-management/feed/{batchId}', 'BreedManagementController@getFeed')->name('feed');
Route::get('/breed-management/vaccination/{batchId}', 'BreedManagementController@getVaccination')->name('vaccination');
Route::get('/breed-management/antiseptic/{batchId}', 'BreedManagementController@getAntiseptic')->name('antiseptic');
Route::get('/breed-management/sell/{batchId}', 'BreedManagementController@getSell')->name('sell');

Route::get('/breed-management/get-info-pig/{pigId}', 'BreedManagementController@getInfoPigBasic');
Route::get('/breed-management/get-info-treatment/{pigId}', 'BreedManagementController@getInfoTreatmentByPig');
Route::get('/breed-management/get-list-equipment', 'BreedManagementController@getListEquipment')->name('gle');
Route::get('/breed-management/get-list-food', 'BreedManagementController@getListFood')->name('glfo');
Route::get('/process-management', 'HomeController@process')->name('process-management');
Route::put('/process-management/update-status-batch', 'ProcessManagement@updateStatusBatch');
Route::post('/process-management/create-comment' , 'ProcessManagement@createComment');
Route::put('/process-management/update-comment', 'ProcessManagement@updateComment');
Route::get('/activity-log', 'ActivityLogController@index')->name('activity-log');
Route::get('/activity-log/{logName}', 'ActivityLogController@searchLogByName');
