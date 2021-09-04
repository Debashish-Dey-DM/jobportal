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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/signin','HomeController@LoginIndex');
Route::get('/wrongIdPass', function () {
    return view('wrongIdPass');
});
Route::post('/signin','HomeController@index');
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/logout','HomeController@logout');
Route::post('/signup','HomeController@createNewUser');
Route::group(['middleware'=>['sess']] , function(){

    

    Route::group(['middleware'=>['admin']] , function(){

#######Job Poster#########
Route::get('/post','AdminController@JobPosterDashboard');
Route::post('/post','AdminController@createjobs');
Route::get('/joblist','AdminController@jobs')->name('AllJobList');
Route::get('/companyName','AdminController@Name');
Route::post('/companyName','AdminController@UpdateName');
Route::get('/allCV/{id}','AdminController@allCv');
    });

    ##########Job Seeker#######
     Route::group(['middleware'=>['seek']] , function(){
Route::get('/ApplyJob','SeekController@jobs')->name('Apply');
Route::get('/apply/{id}/{type}','SeekController@applyJob');
Route::post('/apply/{id}/{type}','SeekController@CvUpdate');
Route::get('/seek', function () {
    return view('jobseeker');
});
  });

});