<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\MainController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about-me', 'AboutController@aboutMe');

//main
// Route::get('/', 'MainConroller@start')->name('start.page');
Route::get('/', 'MainController@overzicht')->name('overzicht.page');
Route::get('/{id}', 'BlogAddController@show')->name('overzicht.detail')->where(['id' => '[0-9]+']);
Route::get('/info', 'InfoController@Info')->name('info.aboutme');
// Route::get('/project', 'MainController@myProjects')->name('project.info');       
// Route::get('/blog/{post}/{id}', 'BlogController@theBlog')->name('all.blogs');

//blog post
Route::get('/blog/add', 'BlogAddController@create')->name('blog.add');
Route::post('/blog/add', 'BlogAddController@store')->name('blog.store');
Route::get('/blog/bewerk/{id}', 'BlogAddController@editform')->name('blog.editform');
Route::post('/blog/{id}/edit', 'BlogAddController@edit')->name('blog.edit');
Route::get('/blog/delete/{id}', 'BlogAddController@delete')->name('blog.delete');
//Form
Route::get('/contact', 'MailController@create' )->name('from.contact');
Route::post('/contact', 'MailController@store' )->name('from.handle');

Auth::routes();

