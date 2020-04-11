<?php

use App\Http\Controllers\MasterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'MasterController@index')->name('homepage');
Route::get('/' . Settings::opt('blogPermalink', 'blog'), 'MasterController@blogPage')->name('blogpage');
Route::get('/' . Settings::opt('blogPermalink', 'blog') . '/{slug}', 'MasterController@blog')->name('blogBySlug');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/web-admin/settings/{any?}', 'WebAdmin@index')->name('webadmin')->where('any', '.*');
// Route::get('/web-admin/{view?}', 'SPAViewController')->name('spa')->where('view', '(.*)');
