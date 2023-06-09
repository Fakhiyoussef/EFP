<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfosController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\TraitementController;
use App\Http\Controllers\HomePageController;
use App\Models\Traitement;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[PatientController::class,'home'])->name('homepage');


Route::get('/hello',[HomeController::class,'hello']);


// Route::get('/home', function () {
//     return view('Hello');
// });




// *********************************   Patient   ********************************************
Route::post('/patients/store',[PatientController::class,'store'])->name('patients.store');
Route::get('/patients',[PatientController::class,'patients'])->name('patientspage');
Route::get('/patients/{patient}',[PatientController::class,'Afficher'])
->name('patients.Afficher')
->where('patient','\d+');

Route::delete('/patients/{patient}',[PatientController::class,'supprimer'])
->name('patients.supprimer');

Route::get('/patients/modifier/{patient}',[PatientController::class,'modifier'])
->name('patients.modifier');

Route::post('/patients/{patient}',[PatientController::class,'update'])
->name('patients.update');



Route::get('/patients/Ajouter',[PatientController::class,'Ajouter'])->name('patients.Ajouter');



Route::get('/patients/search',[PatientController::class,'search'])->name('search');


// Route::resource('patients',PatientController::class);



// ****************** Traitement Route ****************************

Route::get('/traitement',[TraitementController::class,'Traitindex'])->name('traitementpage');
Route::get('/traitements/Ajouter',[TraitementController::class,'Ajouter'])->name('traitements.Ajouter');
Route::post('/traitements/store',[TraitementController::class,'store'])->name('traitements.store');

<<<<<<< HEAD
Route::delete('/traitements/{id}',[TraitementController::class,'supprimer'])
->name('traitements.supprimer');

Route::get('/traitements/modifier/{traitement}',[TraitementController::class,'modifier'])
=======
Route::delete('traitement/{traitement}', [TraitementController::class, 'supprimer'])
->name('traitements.supprimer');


Route::get('/traitements/{traitement}/modifier',[TraitementController::class,'modifier'])
>>>>>>> 431dff10dfc3fe4984aeebb51a36009be4a2b535
->name('traitements.modifier');

Route::post('/traitements/{traitement}',[TraitementController::class,'update'])
->name('traitements.update');





// ============== LOGIN ROUTE ================== ***

Route::get('/login',[LoginController::class,'loginaffich'])->name('login.affich')->middleware('guest');
Route::post('/login',[LoginController::class,'login'])->name('login')->middleware('guest');
Route::get('/logout',[LoginController::class,'logout'])->name('login.logout')->middleware('auth');





// **********************    Dashboard Routes   ********************************

Route::get('/dash',[DashboardController::class,'dashboard'])->name('dashboardpage');


// ***************************    Paiement    **************************

Route::get('/Paiement',[PaiementController::class,'index'])->name('Paiementpage');

Route::get('/Paiement/{patient}',[PaiementController::class,'payer'])->name('payer');


//************************    HOMEPAGE    *****************************

Route::get('/HOMEPAGE',[HomePageController::class,'index'])->name('PrincipalHomePage');




// ******************    Settings    ****************************

Route::get('/settings',[SettingsController::class,'settings'])->name('settingspage');

Route::post('/insertPrice',[SettingsController::class,'insertPrice'])->name('insertPrice');



// ******************    EXCEL    ****************************

Route::get('Patients/export/', [PatientController::class, 'export'])->name('EXPORT');