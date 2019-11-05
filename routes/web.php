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
    return view('welcome');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/enseignant', 'Auth\LoginController@showEnseignantLoginForm');
Route::get('/login/etudiant', 'Auth\LoginController@showEleveLoginForm');
Route::get('/login/directeur_reg', 'Auth\LoginController@showDirecteur_regLoginForm');
Route::get('/login/directeur_prov', 'Auth\LoginController@showDirecteur_provLoginForm');
Route::get('/login/inspecteur', 'Auth\LoginController@showInspecteurLoginForm');
Route::get('/login/gestionnaire', 'Auth\LoginController@showGestionnaireLoginForm');
Route::get('/login/parent_tut', 'Auth\LoginController@showParentLoginForm');


Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm')->name('new_admin');
Route::get('/register/enseignant', 'Auth\RegisterController@showEnseignantRegisterForm')->name('new_enseignant');
Route::get('/register/etudiant', 'Auth\RegisterController@showEtudiantRegisterForm')->name('new_etudiant');
Route::get('/register/directeur_reg', 'Auth\RegisterController@showDirecteur_regRegisterForm')->name('new_dr');
Route::get('/register/directeur_prov', 'Auth\RegisterController@showDirecteur_provRegisterForm')->name('new_dp');
Route::get('/register/inspecteur', 'Auth\RegisterController@showInspecteurRegisterForm')->name('new_inspecteur');
Route::get('/register/gestionnaire', 'Auth\RegisterController@showGestionnaireRegisterForm')->name('new_gestionnaire');
Route::get('/register/parent_tut', 'Auth\RegisterController@showParentRegisterForm')->name('new_parent');



Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/enseignant', 'Auth\LoginController@enseignantLogin');
Route::post('/login/etudiant', 'Auth\LoginController@EleveLogin');
Route::post('/login/directeur_reg', 'Auth\LoginController@DirecteurRegLogin');
Route::post('/login/directeur_prov', 'Auth\LoginController@DirecteurProvLogin');
Route::post('/login/inspecteur', 'Auth\LoginController@InspecteurLogin');
Route::post('/login/gestionnaire', 'Auth\LoginController@GestionnaireLogin');
Route::post('/login/parent_tut', 'Auth\LoginController@ParentLogin');

Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::post('/register/enseignant', 'Auth\RegisterController@createEnseignant');
Route::post('/register/etudiant', 'Auth\RegisterController@createEtudiant');
Route::post('/register/directeur_reg', 'Auth\RegisterController@createDir_reg');
Route::post('/register/directeur_prov', 'Auth\RegisterController@createDir_prov');
Route::post('/register/inspecteur', 'Auth\RegisterController@createInspecteur');
Route::post('/register/gestionnaire', 'Auth\RegisterController@createGestionnaire');
Route::post('/register/parent_tut', 'Auth\RegisterController@createParent');





Route::view('/home', 'home')->middleware('auth');
Route::view('/admin', 'admin');
Route::view('/enseignant', 'enseignant');
Route::view('/etudiant', 'etudiant');
Route::view('/directeur_reg', 'directeur_reg');
Route::view('/directeur_prov', 'directeur_prov');
Route::view('/inspecteur_reg', 'inspecteur_reg');
Route::view('/gestionnnaire', 'gestionnnaire');
Route::view('/parent_tut', 'parent_tut');
