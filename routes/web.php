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
Route::get('/prive', 'MainController@myInfo')->name('user.info');    
Route::get('/project-detail/{jaar}/{id}', 'ProjectDetailController@showDetail')->name('project.detail');
Route::get('/blog/{post}/{id}', 'BlogController@theBlog')->name('all.blogs');
Route::get('/social/{id}', 'SocialController@mySocials')->name('info.social');
Route::get('/review/{id}', 'BlogController@reviewBlog')->name('review.detail');
Route::get('/question/{id}', 'BlogController@questionBLog')->name('question.detail');
//Form
Route::get('/contact', 'FormController@formContact' )->name('from.contact');
Route::post('/contact-request', 'FormController@formHandle' )->name('from.handle');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
