<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/about-me', 'AboutController@aboutMe');

//main
// Route::get('/', 'MainConroller@start')->name('start.page');
Route::get('/overzicht', 'Maincontroller@overzicht')->name('overzicht.page');
Route::get('/info', 'MainController@infoJoey')->name('info.aboutme');
Route::get('/project', 'MainController@myProjects')->name('project.info');    
//Form
Route::get('/contact', 'FormController@formContact' )->name('from.contact');
Route::post('/contact-request', 'FormController@formHandle' )->name('from.handle');
