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

// Route::get('/', function () {
//     return view('welcome');
// });


Auth::routes();

Route::get('/', 'HomeController@index');


Route::get('/doctor_list', 'HomeController@showDoctorList');
Route::get('/doctor_detail', 'HomeController@showDoctorDetail');

Route::get('/patient_account', 'HomeController@showPatientAccount');

Route::get('/admin', 'HomeController@manageLogos');
Route::get('/admin/media', 'HomeController@manageLogos');
Route::get('/admin/media/logo', 'HomeController@manageLogos');
Route::get('/admin/media/image', 'HomeController@manageImages');
Route::get('/admin/media/video', 'HomeController@manageVideos');
Route::get('/admin/media/partner', 'HomeController@managePartner');

///// ========   Admin Logo Edit  ========  //////////
Route::post('/logo/addNewLogo', 'ImageManageController@addNewLogo');
Route::get('/logo/getLogo', 'ImageManageController@getLogo');
Route::post('/logo/removeLogo', 'ImageManageController@removeLogo');

Route::post('/logo/addNewImage', 'ImageManageController@addNewImage');
Route::get('/logo/getImage', 'ImageManageController@getImage');
Route::post('/logo/removeImage', 'ImageManageController@removeImage');

Route::post('/logo/addNewVideo', 'ImageManageController@addNewVideo');
Route::get('/logo/getVideo', 'ImageManageController@getVideo');
Route::post('/logo/removeVideo', 'ImageManageController@removeVideo');

Route::post('/logo/addNewPartner', 'ImageManageController@addNewPartner');
Route::get('/logo/getPartner', 'ImageManageController@getPartner');
Route::post('/logo/removePartner', 'ImageManageController@removePartner');

//// =======  Truncate Table ===== /////////////
Route::get('/admin/secret', 'HomeController@showSecret');
Route::POST('/secret/truncate', 'HomeController@truncate');