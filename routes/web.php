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


//sales rep aka users routes
Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile','UserController@profile');
Route::get('/edit-profile','UserController@editprofile');
Route::post('/edit-profile/post','UserController@updateprofile');
Route::get('mainform','UserController@mainform');
Route::post('mainform/post','UserController@fill');
Route::get('institutions','UserController@view');
//Route::get('update/institution/{institution},''');
Route::get('update/institution/{institution}','UserController@updateinstitution');

//admin routes
Route::group(['prefix'=>'admin','middleware'=>'admin'],function(){

//    Route::get('/home','AdminController@index');
    Route::get('/profile','AdminController@profile');
    Route::get('/edit-profile','AdminController@editprofile');
    Route::post('/edit-profile/post','AdminController@updateprofile');
    Route::get('/reg-managers','AdminController@managers');
    Route::get('/managers-form','AdminController@managersform');
    Route::post('/managers-form/post','AdminController@addManager');
    Route::get('/addregion','AdminController@addregion');
    Route::post('/addregion/post','AdminController@postregion');
    Route::get('/subsubregion','AdminController@addsubregion');
    Route::post('/subregion/post','AdminController@postsubregion');
});









































//the route below is for posting the coordinates of an application user, research more on this
//Route::post('/map', function (Request $request) {
//    $lat = $request->input('lat');
//    $long = $request->input('long');
//    $location = ["lat"=>$lat, "long"=>$long];
//    event(new SendLocation($location));
//    return response()->json(['status'=>'success', 'data'=>$location]);
//});