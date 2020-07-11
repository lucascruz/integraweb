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
Route::get('/doctor_detail/{id}', 'HomeController@showDoctorDetail')->name('doctor.details');
Route::get('/patient_account', 'HomeController@showPatientAccount');


Route::get('/admin', 'HomeController@manageLogos');
Route::get('/admin/media', 'HomeController@manageLogos');
Route::get('/admin/media/logo', 'HomeController@manageLogos');
Route::get('/admin/media/image', 'HomeController@manageImages');
Route::get('/admin/media/video', 'HomeController@manageVideos');
Route::get('/admin/media/partner', 'HomeController@managePartner');

Route::get('/admin/user/doctor', 'HomeController@manageDoctor');
Route::get('/admin/user/city', 'HomeController@manageCity');
Route::get('/admin/user/speciality', 'HomeController@manageSpeciality');
Route::get('/admin/user/formation', 'HomeController@manageFormation');

Route::get('/admin/service/service_type', 'HomeController@manageServieType')->name('service.type');
Route::get('/admin/service/services', 'HomeController@manageServies')->name('service.manage');

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

/////  ======  Doctor Manage ======= ///////////

Route::post('/doctor/addNewCity', 'DoctorManageController@addNewCity');
Route::get('/doctor/getCity', 'DoctorManageController@getCity');
Route::post('/doctor/removeCity', 'DoctorManageController@removeCity');

Route::post('/doctor/addNewSpeciality', 'DoctorManageController@addNewSpeciality');
Route::get('/doctor/getSpeciality', 'DoctorManageController@getSpeciality');
Route::post('/doctor/removeSpeciality', 'DoctorManageController@removeSpeciality');

Route::post('/doctor/addNewFormation', 'DoctorManageController@addNewFormation');
Route::get('/doctor/getFormation', 'DoctorManageController@getFormation');
Route::post('/doctor/removeFormation', 'DoctorManageController@removeFormation');


Route::post('/doctor/addNewDoctor', 'DoctorManageController@addNewDoctor');
Route::get('/doctor/getDoctor', 'DoctorManageController@getDoctor');
Route::post('/doctor/removeDoctor', 'DoctorManageController@removeDoctor');
Route::post('/doctor/editAdvanceDoctor', 'DoctorManageController@editAdvanceDoctor');

/////  ======  Service Manage ======= ///////////

Route::post('/service/addNewServiceType', 'ServiceManageController@addNewServiceType');
Route::get('/service/getServiceType', 'ServiceManageController@getServiceType');
Route::post('/service/removeServiceType', 'ServiceManageController@removeServiceType');

Route::post('/service/addNewService', 'ServiceManageController@addNewService');
Route::get('/service/getService', 'ServiceManageController@getService');
Route::post('/service/removeService', 'ServiceManageController@removeService');


//// =======  Truncate Table ===== /////////////
Route::get('/admin/secret', 'HomeController@showSecret');
Route::POST('/secret/truncate', 'HomeController@truncate');