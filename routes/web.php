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


// Routes publiques

Route::get('/', 'PortfolioController@index')->name('accueil');
Route::get('/profil', 'PortfolioController@profil')->name('profil');

					// Parametres pour l'envoi de mail
Route::get('/contact', 'PortfolioController@formContact')->name('contact');
Route::post('/contact', 'PortfolioController@envoiContact');

// Routes d'identification

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Routes d'administration

    // CRUD(Lire,Créer,Modifier et supprimer)

                      // 1.Lecture des contenus des tables
Route::middleware('auth')->get('/admin/adminstudies', 'AdminController@adminstudies')->name('adminstudies');
Route::middleware('auth')->get('/admin/adminskills', 'AdminController@adminskills')->name('adminskills');
Route::middleware('auth')->get('/admin/admininformations', 'AdminController@admininformations')->name('admininformations');
Route::middleware('auth')->get('/admin/adminprojects', 'AdminController@adminprojects')->name('adminprojects');
Route::middleware('auth')->get('/admin/admincontact', 'AdminController@admincontact')->name('admincontact');

                    // 2.Creer du contenu pour les tables

Route::middleware('auth')->get('/admin/add/addadminstudies', 'AdminController@addadminstudies')->name('addadminstudies');
Route::middleware('auth')->get('/admin/add/addadminskills', 'AdminController@addadminskills')->name('addadminskills');
Route::middleware('auth')->get('/admin/add/addadmininformations', 'AdminController@addadmininformations')->name('addadmininformations');
Route::middleware('auth')->get('/admin/add/addadminprojects', 'AdminController@addadminprojects')->name('addadminprojects');

Route::middleware('auth')->post('/admin/add/addadminstudies', 'AdminController@goaddadminstudies')->name('goaddadminstudies');
Route::middleware('auth')->post('/admin/add/addadminskills', 'AdminController@goaddadminskills')->name('goaddadminskills');
Route::middleware('auth')->post('/admin/add/addadmininformations', 'AdminController@goaddadmininformations')->name('goaddadmininformations');
Route::middleware('auth')->post('/admin/add/addadminprojects', 'AdminController@goaddadminprojects')->name('goaddadminprojects');

					// 3.Modifier le contenu des tables

Route::middleware('auth')->get('/admin/edit/editadminstudies/{id}', 'AdminController@editadminstudies')->name('modif_adminstudies');
Route::middleware('auth')->get('/admin/edit/editadminskills/{id}', 'AdminController@editadminskills')->name('modif_adminskills');
Route::middleware('auth')->get('/admin/edit/editadmininformations/{id}', 'AdminController@editadmininformations')->name('modif_admininformations');
Route::middleware('auth')->get('/admin/edit/editadminprojects/{id}', 'AdminController@editadminprojects')->name('modif_adminprojects');

Route::middleware('auth')->post('/admin/edit/editadminstudies', 'AdminController@saveeditadminstudies')->name('saveeditadminstudies');
Route::middleware('auth')->post('/admin/edit/editadminskills', 'AdminController@saveeditadminskills')->name('saveeditadminskills');
Route::middleware('auth')->post('/admin/edit/editadmininformations', 'AdminController@saveeditadmininformations')->name('saveeditadmininformations');
Route::middleware('auth')->post('/admin/edit/editadminprojects', 'AdminController@saveeditadminprojects')->name('saveeditadminprojects');

                    // 4.Supprimer le contenu des tables
Route::middleware('auth')->get('/admin/destroyadminstudies/{id}', 'AdminController@destroyadminstudies')->name('suppr_studies');
Route::middleware('auth')->get('/admin/destroyadminskills/{id}', 'AdminController@destroyadminskills')->name('suppr_skills');
Route::middleware('auth')->get('/admin/destroyadmininformations/{id}', 'AdminController@destroyadmininformations')->name('suppr_informations');
Route::middleware('auth')->get('/admin/destroyadminprojects/{id}', 'AdminController@destroyadminprojects')->name('suppr_projet');
Route::middleware('auth')->get('/admin/destroyadmincontact/{id}', 'AdminController@destroyadmincontact')->name('suppr_contact');


