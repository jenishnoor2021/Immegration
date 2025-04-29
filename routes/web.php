<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\AdminTeamController;
use App\Http\Controllers\AdminBranchsController;
use App\Http\Controllers\AdminTestominalController;

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
//     return view('auth.login');
// })->name('admin.login');

Route::get('/admin/login', function () {
    return view('auth.login');
})->name('admin.login');

Route::get('/', [App\Http\Controllers\AdminController::class, 'homePage']);

//  for admin registration below comment uncomment karvi and above auth.login ne comment karvi
// Route::get('/', function () {
//     return view('welcome');
// });
// Auth::routes();

Route::get('/aboutus', [App\Http\Controllers\AdminController::class, 'aboutUs'])->name('aboutUs');

Route::get('contactus', [App\Http\Controllers\AdminController::class, 'contactUs'])->name('contactUs');

Route::get('/country-list', [App\Http\Controllers\AdminController::class, 'countryList'])->name('country-list');
Route::get('/country-details', [App\Http\Controllers\AdminController::class, 'countryDetails'])->name('country-details');
Route::get('/case', [App\Http\Controllers\AdminController::class, 'case'])->name('case');
Route::get('/case-details', [App\Http\Controllers\AdminController::class, 'caseDetails'])->name('case-details');
Route::get('/team', [App\Http\Controllers\AdminController::class, 'team'])->name('team');
Route::get('/appointments', [App\Http\Controllers\AdminController::class, 'appointments'])->name('appointments');
Route::get('/work-process', [App\Http\Controllers\AdminController::class, 'workProcess'])->name('work-process');
Route::get('/visa-list', [App\Http\Controllers\AdminController::class, 'visaList'])->name('visa-list');
Route::get('/tourist-visa', [App\Http\Controllers\AdminController::class, 'touristVisa'])->name('tourist-visa');
Route::get('/services', [App\Http\Controllers\AdminController::class, 'services'])->name('services');



Route::post('/inquireystore', [App\Http\Controllers\AdminController::class, 'storeInquiry'])->name('storeInquiry');

Route::post('/contactstore', [App\Http\Controllers\AdminController::class, 'storeContact'])->name('storeContact');

Route::post('/testomonialstore', [App\Http\Controllers\AdminTestominalController::class, 'storeTestomonial'])->name('storeContact');

Route::post('/quatationstore', [App\Http\Controllers\AdminController::class, 'storeQuatation'])->name('storequatation');

Route::post('/appointmentstore', [App\Http\Controllers\AdminAppointmentController::class, 'store'])->name('storeappointment');


// Route::get('/logout', 'Auth\LoginController@logout');
Route::post('/login', [App\Http\Controllers\AdminController::class, 'login'])->name('login');
Route::get('/logout', [App\Http\Controllers\AdminController::class, 'logout'])->name('logout');


Route::group(['middleware' => ['auth', 'usersession']], function () {

    Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin');

    Route::get('/profile/{id}', [App\Http\Controllers\AdminController::class, 'profiledit'])->name('profile.edit');
    Route::post('/profile/update', [App\Http\Controllers\AdminController::class, 'profileUpdate'])->name('profile.update');

    Route::get("admin/testomonial", [AdminTestominalController::class, 'index'])->name('admin.testomonial.index');
    Route::get('admin/testomonial/create', [AdminTestominalController::class, 'create'])->name('admin.testomonial.create');
    Route::post('admin/testomonial/store', [AdminTestominalController::class, 'store'])->name('admin.testomonial.store');
    Route::get('admin/testomonial/edit/{id}', [AdminTestominalController::class, 'edit'])->name('admin.testomonial.edit');
    Route::patch('admin/testomonial/update/{id}', [AdminTestominalController::class, 'update'])->name('admin.testomonial.update');
    Route::get('admin/testomonial/destroy/{id}', [AdminTestominalController::class, 'destroy'])->name('admin.testomonial.destroy');
    Route::delete('/mytestomonialDeleteAll', [AdminTestominalController::class, 'deleteTestomonialAll'])->name('deletetestomonialAll');
    Route::get("admin/testomonial/searchtestompnial", [AdminTestominalController::class, 'searchTestomonial'])->name('admin.testomonial.search');
    Route::get('admin/testomonial/statusupdate/{id}', [AdminTestominalController::class, 'statusUpdate'])->name('admin.testomonial.status');

    Route::get("admin/branch", [AdminBranchsController::class, 'index'])->name('admin.branch.index');
    Route::get('admin/branch/create', [AdminBranchsController::class, 'create'])->name('admin.branch.create');
    Route::post('admin/branch/store', [AdminBranchsController::class, 'store'])->name('admin.branch.store');
    Route::get('admin/branch/edit/{id}', [AdminBranchsController::class, 'edit'])->name('admin.branch.edit');
    Route::patch('admin/branch/update/{id}', [AdminBranchsController::class, 'update'])->name('admin.branch.update');
    Route::get('admin/branch/destroy/{id}', [AdminBranchsController::class, 'destroy'])->name('admin.branch.destroy');
    Route::get('admin/branch/statusupdate/{id}', [AdminBranchsController::class, 'statusUpdate'])->name('admin.branch.status');

    Route::get('admin/contact', [App\Http\Controllers\AdminContactController::class, 'index'])->name('admin.contact');
    Route::get('admin/contact/create', [App\Http\Controllers\AdminContactController::class, 'create'])->name('admin.contact.create');
    Route::post('admin/contact/store', [App\Http\Controllers\AdminContactController::class, 'store'])->name('admin.contact.store');
    Route::get('admin/contact/edit/{id}', [App\Http\Controllers\AdminContactController::class, 'edit'])->name('admin.contact.edit');
    Route::patch('admin/contact/update/{id}', [App\Http\Controllers\AdminContactController::class, 'update'])->name('admin.contact.update');
    Route::get('admin/contact/destroy/{id}', [App\Http\Controllers\AdminContactController::class, 'destroy'])->name('admin.contact.destroy');
    Route::delete('/mycontactDeleteAll', [App\Http\Controllers\AdminContactController::class, 'mycontactDeleteAll'])->name('mycontactDeleteAll');

    Route::get('admin/enquirey', [App\Http\Controllers\AdminEnquireyController::class, 'index'])->name('admin.enquirey');
    Route::get('admin/enquirey/create', [App\Http\Controllers\AdminEnquireyController::class, 'create'])->name('admin.enquirey.create');
    Route::post('admin/enquirey/store', [App\Http\Controllers\AdminEnquireyController::class, 'store'])->name('admin.enquirey.store');
    Route::get('admin/enquirey/edit/{id}', [App\Http\Controllers\AdminEnquireyController::class, 'edit'])->name('admin.enquirey.edit');
    Route::patch('admin/enquirey/update/{id}', [App\Http\Controllers\AdminEnquireyController::class, 'update'])->name('admin.enquirey.update');
    Route::get('admin/enquirey/destroy/{id}', [App\Http\Controllers\AdminEnquireyController::class, 'destroy'])->name('admin.enquirey.destroy');

    Route::get('admin/appointment', [App\Http\Controllers\AdminAppointmentController::class, 'index'])->name('admin.appointment');
    // Route::get('admin/appointment/create', [App\Http\Controllers\AdminAppointmentController::class, 'create'])->name('admin.appointment.create');
    // Route::post('admin/appointment/store', [App\Http\Controllers\AdminAppointmentController::class, 'store'])->name('admin.appointment.store');
    // Route::get('admin/appointment/edit/{id}', [App\Http\Controllers\AdminAppointmentController::class, 'edit'])->name('admin.appointment.edit');
    // Route::patch('admin/appointment/update/{id}', [App\Http\Controllers\AdminAppointmentController::class, 'update'])->name('admin.appointment.update');
    Route::get('admin/appointment/destroy/{id}', [App\Http\Controllers\AdminAppointmentController::class, 'destroy'])->name('admin.appointment.destroy');

    Route::get("admin/team", [AdminTeamController::class, 'index'])->name('admin.team.index');
    Route::get('admin/team/create', [AdminTeamController::class, 'create'])->name('admin.team.create');
    Route::post('admin/team/store', [AdminTeamController::class, 'store'])->name('admin.team.store');
    Route::get('admin/team/edit/{id}', [AdminTeamController::class, 'edit'])->name('admin.team.edit');
    Route::patch('admin/team/update/{id}', [AdminTeamController::class, 'update'])->name('admin.team.update');
    Route::get('admin/team/destroy/{id}', [AdminTeamController::class, 'destroy'])->name('admin.team.destroy');
    Route::delete('/myteamDeleteAll', [AdminTeamController::class, 'deleteteamAll'])->name('deleteteamAll');
    Route::get("admin/team/searchtestompnial", [AdminTeamController::class, 'searchteam'])->name('admin.team.search');
    Route::get('admin/team/statusupdate/{id}', [AdminTeamController::class, 'statusUpdate'])->name('admin.team.status');


    Route::get('admin/quatation', [App\Http\Controllers\AdminQuatationController::class, 'index'])->name('admin.quatation');
    Route::get('admin/quatation/create', [App\Http\Controllers\AdminQuatationController::class, 'create'])->name('admin.quatation.create');
    Route::post('admin/quatation/store', [App\Http\Controllers\AdminQuatationController::class, 'store'])->name('admin.quatation.store');
    Route::get('admin/quatation/edit/{id}', [App\Http\Controllers\AdminQuatationController::class, 'edit'])->name('admin.quatation.edit');
    Route::patch('admin/quatation/update/{id}', [App\Http\Controllers\AdminQuatationController::class, 'update'])->name('admin.quatation.update');
    Route::get('admin/quatation/destroy/{id}', [App\Http\Controllers\AdminQuatationController::class, 'destroy'])->name('admin.quatation.destroy');
});

//Clear Cache facade value:
Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//Reoptimized class loader:
Route::get('/optimize', function () {
    Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function () {
    Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function () {
    Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function () {
    Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function () {
    Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});
