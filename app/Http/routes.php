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
Route::get('/','PagesController@getHomepage');
Route::get('index',['as'=>'index','uses'=>'PagesController@getIndex']);
/*Forms routes*/
Route::put('index' , ['as'=>'setdata' , 'uses'=>'DataForProcessingController@setData']);
Route::put('form' , ['as'=>'storeknndata' , 'uses'=>'DataForProcessingController@storeKnnData']);
/*contact routes*/
Route::get('about' , ['as'=>'about' , 'uses'=>'PagesController@getAbout']);
Route::get('contact' , ['as'=>'contact' , 'uses'=>'PagesController@getContact']);
/*Algorithms routes*/
Route::get('knn',['as'=>'knn','uses'=>'PagesController@getKnn']);
Route::get('decisionTrees',['as'=>'decisionTrees','uses'=>'PagesController@getDecisionTrees']);
Route::get('bayes',['as'=>'bayes','uses'=>'PagesController@getBayes']);
Route::get('theory',['as'=>'theory','uses'=>'PagesController@getTheory']);



