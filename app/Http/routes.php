<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/* Welcome routes*/
Route::get('/','GetWelcomePageController@getHomepage');
Route::get('index',['as'=>'index','uses'=>'GetIndexController@getIndex']);
/*Forms routes*/
Route::put('index' , ['as'=>'setdata' , 'uses'=>'DataForProcessingController@setData']);
/*contact routes*/
//Route::get('confirm' , ['as'=>'dataConfirmation' , 'uses'=>'getDataConfirmation@getDataConfirmation']);
Route::get('about' , ['as'=>'about' , 'uses'=>'PagesController@getAbout']);
Route::get('contact' , ['as'=>'contact' , 'uses'=>'PagesController@getContact']);
Route::get('cvi' , ['as'=>'cvi' , 'uses'=>'PagesController@getCvi']);
Route::get('cvm' , ['as'=>'cvm' , 'uses'=>'PagesController@getCvm']);
Route::get('progressBar{count}' , ['as'=>'progressBar' , 'uses'=>'ProgressBarController@progressBar']);
/*Enable Matlab */
Route::put('enable' , ['as'=>'enableMatlab' , 'uses'=>'EnableMatlabController@enableMatlabForUpdate']);
/*Algorithms routes for theory*/
Route::resource('theory','TheoryController');
Route::resource('dataset','DatasetController');
Route::resource('result','ResultFromMatlabController');


Route::auth();

Route::get('/home', 'HomeController@index');
