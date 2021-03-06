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


Route::get('/' , 'HomeController@welcome')->name('welcome');

// CONTACT

Route::get('/contact' , 'HomeController@contact')->name('contact');
Route::post('/agregarContact' , 'ContactController@storeContact')->name('storeContact');

Route::get('/admin/user/contact-list' , 'ContactController@listcontact')->name('contact-list');

// TAGS

Route::get('/admin/service/tags' , 'TagsController@tags')->name('tags');
Route::post('/agregarTag' , 'TagsController@storeTag')->name('storeTag');
Route::get('/admin/service/tags-list' , 'TagsController@listtags')->name('tags-list');
Route::get('/tags-edit/{id}' , 'TagsController@editTag')->name('tags-edit');
Route::put('/updateTag/{id}' , 'TagsController@updateTag')->name('updateTag');
Route::delete('/eliminarTag/{id}' , 'TagsController@destroyTag')->name('eliminarTag');

// TYPES

Route::get('/admin/user/type' , 'DoctorTypeController@type')->name('type');
Route::post('/agregarType' , 'DoctorTypeController@storeType')->name('storeType');
Route::get('/admin/user/type-list' , 'DoctorTypeController@listtype')->name('type-list');
Route::get('/type-edit/{id}' , 'DoctorTypeController@editType')->name('type-edit');
Route::put('/updateType/{id}' , 'DoctorTypeController@updateType')->name('updateType');
Route::delete('/eliminarType/{id}' , 'DoctorTypeController@destroyType')->name('eliminarType');

// DOCTOR SERVICES

Route::get('/admin/user/service' , 'DoctorServiceController@service')->name('service');
Route::post('/agregarService' , 'DoctorServiceController@storeService')->name('storeService');
Route::get('/admin/user/service-list' , 'DoctorServiceController@listservice')->name('service-list');
Route::get('/service-edit/{id}' , 'DoctorServiceController@editService')->name('service-edit');
Route::put('/updateService/{id}' , 'DoctorServiceController@updateService')->name('updateService');
Route::delete('/eliminarService/{id}' , 'DoctorServiceController@destroyService')->name('eliminarService');

// DOCTOR USER

Route::get('/admin/user/add-doctor-user' , 'DoctorManageController@doctoruser')->name('add-doctor-user');
Route::post('/agregarDoctorUser' , 'DoctorManageController@storeDoctorUser')->name('storeDoctorUser');

Route::get('/admin/user/doctor-user-list' , 'DoctorManageController@doctoruserlist')->name('doctor-user-list');

// OPINIONS

Route::get('/doctor/opinions' , 'OpinionsController@opinions')->name('opinions');
Route::post('/agregarOpinion' , 'OpinionsController@storeOpinion')->name('storeOpinion');

// Appointments

Route::get('/appointment_history' , 'AppointmentsController@appointments')->name('appointment_history');
Route::get('/account_configuration/{id}' , 'AppointmentsController@accountconfiguration')->name('account_configuration');
Route::post('/agregarAppointment' , 'AppointmentsController@storeAppointment')->name('storeAppointment');

// PROFESSIONAL MANAGE

Route::get('/professional' , 'ProfessionalController@account')->name('account');
Route::get('/professional/accountpage' , 'ProfessionalController@account')->name('account');
Route::get('/professional/report' , 'ProfessionalController@report')->name('report');
Route::get('/professional/scheduling' , 'ProfessionalController@scheduling')->name('scheduling');
Route::get('/professional/services' , 'DoctorServiceController@service')->name('services');
Route::get('/professional/service-list/{id}' , 'DoctorServiceController@listservice')->name('service-list');


Route::get('/professional/edit-account/{id}' , 'ProfessionalController@editAccount')->name('edit-account');
Route::put('/professional/updateAccount/{id}' , 'ProfessionalController@updateAccount')->name('updateAccount');


// INSURANCE

Route::get('/admin/service/insurance' , 'InsuranceController@insurance')->name('insurance');
Route::post('/agregarInsurance' , 'InsuranceController@storeInsurance')->name('storeInsurance');
Route::get('/admin/service/insurance-list' , 'InsuranceController@listinsurance')->name('insurance-list');
Route::get('/insurance-edit/{id}' , 'InsuranceController@editInsurance')->name('insurance-edit');
Route::put('/updateInsurance/{id}' , 'InsuranceController@updateInsurance')->name('updateInsurance');
Route::delete('/eliminarInsurance/{id}' , 'InsuranceController@destroyInsurance')->name('eliminarInsurance');

// DOCTOR LIST

Route::get('/doctor_list', 'HomeController@showDoctorList')->name('doctor_list');
Route::get('/doctor_detail/{id}', 'HomeController@showDoctorDetail')->name('doctor.details');
Route::get('/patient_account' , 'HomeController@showPatientAccount')->name('patient_account');
Route::get('/autocomplete/especialization', 'HomeController@getAutocompleteDataForSpecialization');
Route::get('/autocomplete/city', 'HomeController@getAutocompleteDataForCity');

// BUSCADOR DOCTOR LIST


// DOCTOR FORMS

Route::get('/admin/user/doctors-forms' , 'DoctorFormController@doctorform')->name('doctorform');
Route::post('/agregarDoctorForm' , 'DoctorFormController@storeDoctorForm')->name('storeDoctorForm');
Route::get('/admin/user/doctor-form-list' , 'DoctorFormController@listdoctorform')->name('doctor-form-list');
Route::get('/doctor-form-edit/{id}' , 'DoctorFormController@editDoctorForm')->name('doctor-form-edit');
Route::put('/updateDoctorForm/{id}' , 'DoctorFormController@updateDoctorForm')->name('updateDoctorForm');
Route::delete('/eliminarDoctorForm/{id}' , 'DoctorFormController@destroyDoctorForm')->name('eliminarDoctorForm');


// FORM ITEMS

Route::get('/admin/user/form-items' , 'FormItemController@formitem')->name('formitem');



Route::get('/admin', 'HomeController@manageLogos');
Route::get('/admin/media', 'HomeController@manageLogos');
Route::get('/admin/media/logo', 'HomeController@manageLogos');
Route::get('/admin/media/image', 'HomeController@manageImages');
Route::get('/admin/media/video', 'HomeController@manageVideos');
Route::get('/admin/media/partner', 'HomeController@managePartner');
Route::get('admin/media/benefit', 'HomeController@manageBenefit')->name('media.benefit');


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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();