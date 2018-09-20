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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile','UserController@profile');
Route::get('/edit-profile','UserController@editprofile');
Route::post('/edit-profile/post','UserController@updateprofile');

    //the route below is for posting the coordinates of an application user, research more on this
//Route::post('/map', function (Request $request) {
//    $lat = $request->input('lat');
//    $long = $request->input('long');
//    $location = ["lat"=>$lat, "long"=>$long];
//    event(new SendLocation($location));
//    return response()->json(['status'=>'success', 'data'=>$location]);
//});

Route::get('wewe',function(){
   return view('user.pages.mainform');
});


//remember to prefix all the routes and add middleware
Route::get('/admin/home','AdminController@index')->middleware('admin');
Route::get('/admin/reg-managers','AdminController@managers');
Route::get('/admin/managers-form','AdminController@managersform');
Route::post('/admin/managers-form/post','AdminController@addManager');
Route::get('/admin/addregion','AdminController@addregion');
Route::post('/admin/addregion/post','AdminController@postregion');

Route::get('/admin/subsubregion','AdminController@addsubregion');
Route::post('admin/subregion/post','AdminController@postsubregion');
