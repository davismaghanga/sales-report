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
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes(['verify'=>true]);

Route::group(['middleware'=>'verified'],function (){

    Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
    Route::get('/profile','UserController@profile');
    Route::get('/edit-profile/{user}','UserController@editprofile');
    Route::post('/edit-profile/post','UserController@updateprofile');
    Route::get('mainform','UserController@mainform');
    Route::post('mainform/post','UserController@fill');
    Route::get('institutions','UserController@view');
    Route::get('update/institution/{institution}','UserController@updateinstitution');
    Route::post('mainform/view/sub_counties_json','UserController@subCountiesJson');
    Route::get('institution/booklists/{institution}','UserController@booklists');
    Route::get('institution/booklists/download/{file_name}','UserController@downloadFile');
    Route::get('institution/KYC/{institution}','UserController@kyc');
    Route::get('institution/kyc/download/{kyc}','UserController@downloadkyc');

});





//admin routes
Route::group(['prefix'=>'admin','middleware'=>'admin','verified'],function(){
    Route::get('/profile','AdminController@profile');
    Route::get('/edit-profile','AdminController@editprofile');
    Route::post('/edit-profile/post','AdminController@updateprofile');
    Route::get('/admins','AdminController@admins');
    Route::get('/authorize/user','AdminController@viewusers');
    Route::get('/authorize/admin/status/{user}','AdminController@makeadmin');
    Route::get('delete/admin/{admin}','AdminController@delete_regmanager');

    Route::get('/view-regions','AdminController@allregions');

    Route::get('/view-subregions','AdminController@allsubregions');
    Route::get('/view-subcounties','AdminController@allsubcounties');
    //following are routes for getting all (different)institutional details
    Route::get('/view/public/primary','AdminController@viewpubprimary');
    Route::get('/view/public/secondary','AdminController@viewpubsec');
    Route::get('/view/private/secondary','AdminCOntroller@viewprivsec');
    Route::get('/view/private/primary','AdminController@viewprivprimary');
    Route::get('/view/ngos','AdminController@viewngos');
    Route::get('/view/counties','AdminController@county');
    Route::get('/view/bookshops','AdminController@bookshops');
    Route::get('/view/ecds','AdminController@ecds');
    Route::get('/view/allreps','AdminController@viewallreps');
    Route::get('/view/rep-visits/{id}','AdminController@rep_visits');
    Route::post('/view/sub_counties_json','AdminController@subCountiesJson');
    Route::post('/view/get_institution_table','AdminController@institutionTable');
    Route::get('/institution/booklists/{institution}','AdminController@booklists');
    Route::get('/institution/booklists/download/{file_name}','AdminController@downloadFile');
    Route::get('/institution/kyc/{institution}','AdminController@kyc');
    Route::get('/institution/kyc/download/{kyc}','AdminController@downloadKyc');

    //regions
    Route::get('/coast/details','AdminController@coast');
    Route::get('/rift','AdminController@riftv');
    Route::get('/nairobi','AdminController@Nairobi');
    Route::get('/central','AdminController@Central');
    Route::get('/western','AdminController@Western');
    Route::get('/nyanza','AdminController@Nyanza');
    Route::get('/northeastern','AdminController@NorthEastern');
    Route::get('/eastern','AdminController@Eastern');
        //excel

    Route::post('/coast/excel','AdminController@coastExcel');
    Route::post('/central/excel','AdminController@centralExcel');
    Route::post('/rift/excel','AdminController@riftExcel');
    Route::post('/nairobi/excel','AdminController@nairobiExcel');
    Route::post('/western/excel','AdminController@westernExcel');
    Route::post('/nyanza/excel','AdminController@nyanzaExcel');
    Route::post('/northeastern/excel','AdminController@northeasternExcel');
    Route::post('/eastern/excel','AdminController@easternExcel');
//    Route::get('/subregion/post','AdminController@postsubregion');
    Route::get('/view-subregions','AdminController@allsubregions');

});








































//the route below is for posting the coordinates of an application user, research more on this
//Route::post('/map', function (Request $request) {
//    $lat = $request->input('lat');
//    $long = $request->input('long');
//    $location = ["lat"=>$lat, "long"=>$long];
//    event(new SendLocation($location));
//    return response()->json(['status'=>'success', 'data'=>$location]);
//});
