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

Route::group(['middleware'=>['auth','verified']],function (){

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
    Route::get('/institution/report/{institution}','UserController@report');
    Route::get('institution/report/download/{report}','UserController@downloadreport');

    Route::get('orderpage','UserController@orderpage');
    Route::get('add-to-cart/{id}','BookController@getAddToCart');
    Route::get('add-five/{id}','BookController@getAddFiveToCart');
    Route::get('add-ten/{id}','BookController@getAddTenToCart');
    Route::get('add-hundred/{id}','BookController@getAdd100ToCart');

    Route::get('reduceOne/{id}','BookController@getReduceByOne');
    Route::get('removeBook/{id}','BookController@getRemoveItem');
    Route::get('shopping-cart','BookController@getCart');

//    Route::get('checkoutpage','BookController@checkoutPage');
    Route::post('checkoutpage','BookController@postCheckOut');

    Route::post('discount/post','BookController@getDiscount');
    Route::post('courier/post','BookController@getCourier');

    Route::post('goToCheckout/post','BookController@checkoutPage');
//    Route::get('sendNotification','BookController@sendNotification');



});





//admin routes
Route::group(['prefix'=>'admin','middleware'=>['auth','admin','verified']],function(){
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
    Route::get('/view/private/secondary','AdminController@viewprivsec');
    Route::get('/view/private/primary','AdminController@viewprivprimary');
    Route::get('/view/ngos','AdminController@viewngos');
    Route::get('/view/counties','AdminController@county');
    Route::get('/view/bookshops','AdminController@bookshops');
    Route::get('/view/ecds','AdminController@ecds');
    Route::get('/view/allreps','AdminController@viewallreps');
    Route::get('/view/rep-visits/{id}','AdminController@rep_visits');
    Route::get('/view/profile/{id}','AdminController@userProfile');


    Route::post('/view/sub_counties_json','AdminController@subCountiesJson');
    Route::post('/view/get_institution_table','AdminController@institutionTable');

    Route::post('/view/getInstitutionTable2','AdminController@getInstitutionTable2');
    Route::get('/institution/booklists/{institution}','AdminController@booklists');
    Route::get('/institution/booklists/download/{file_name}','AdminController@downloadFile');
    Route::get('/institution/kyc/{institution}','AdminController@kyc');
    Route::get('/institution/kyc/download/{kyc}','AdminController@downloadKyc');
    Route::get('/institution/report/{institution}','AdminController@report');
    Route::get('/institution/report/download/{report}','AdminController@downloadReport');




    //regions
    Route::get('/coast/details','AdminController@coast');
    Route::get('/rift','AdminController@riftv');
    Route::get('/nairobi','AdminController@Nairobi');
    Route::get('/central','AdminController@Central');
    Route::get('/western','AdminController@Western');
    Route::get('/nyanza','AdminController@Nyanza');
    Route::get('/northeastern','AdminController@NorthEastern');
    Route::get('/eastern','AdminController@Eastern');

        //excel exports

    Route::post('/coast/excel','AdminController@coastExcel');
    Route::post('/central/excel','AdminController@centralExcel');
    Route::post('/rift/excel','AdminController@riftExcel');
    Route::post('/nairobi/excel','AdminController@nairobiExcel');
    Route::post('/western/excel','AdminController@westernExcel');
    Route::post('/nyanza/excel','AdminController@nyanzaExcel');
    Route::post('/northeastern/excel','AdminController@northeasternExcel');
    Route::post('/eastern/excel','AdminController@easternExcel');


    Route::get('/view-subregions','AdminController@allsubregions');

    //Excel Imports

    //rift valley
    Route::post('/rift/import','AdminController@riftImport');
    Route::get('/rift/view/schools','AdminController@riftView');

    //central
    Route::get('/central/view/schools','AdminController@centralView');
    Route::post('/central/import','AdminController@centralImport');

    //coast
    Route::get('/coast/view/schools','AdminController@coastView');
    Route::post('/coast/import','AdminController@coastImport');

    //eastern
    Route::get('/eastern/view/schools','AdminController@easternView');
    Route::post('/eastern/import','AdminController@easternImport');


    //nairobi
    Route::get('/nairobi/view/schools','AdminController@nairobiView');
    Route::post('/nairobi/import','AdminController@nairobiImport');

    //northeastern
    Route::get('/northeastern/view/schools','AdminController@northeasternView');
    Route::post('/northeastern/import','AdminController@northeasternImport');

    //nyanza
    Route::get('/nyanza/view/schools','AdminController@nyanzaView');
    Route::post('/nyanza/import','AdminController@nyanzaImport');


    //western
    Route::get('/western/view/schools','AdminController@westernView');
    Route::post('/western/import','AdminController@westernImport');

    //inventory/books
    Route::post('/import/books','AdminController@bookImport');
    Route::get('/inventory','AdminController@bookpage');

    //delete book
    Route::get('/delete/book/{id}','AdminController@deleteBook');

    Route::get('/addpage','BookController@addpage');

    //add book
    Route::post('/addbook','BookController@addBook');

    //orders

    Route::get('orders','AdminController@getOrders');
    Route::get('order_id/{id}','AdminController@getOrder');
    Route::get('/order/process/{id}','AdminController@process');






});








































//the route below is for posting the coordinates of an application user, research more on this
//Route::post('/map', function (Request $request) {
//    $lat = $request->input('lat');
//    $long = $request->input('long');
//    $location = ["lat"=>$lat, "long"=>$long];
//    event(new SendLocation($location));
//    return response()->json(['status'=>'success', 'data'=>$location]);
//});
