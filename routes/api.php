<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Wink\WinkPage;
use Wink\WinkPost;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServicePrtvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::group(['prefix' => 'settings'], function () {
//     Route::get('users/{id}', 'ApiControlle');

// });

Route::group(['prefix' => 'data'], function () {
    Route::get('pages', function(){
        $pages = WinkPage::select(['title','slug'])->get();
        return $pages;
    } );

});

Route::group(['prefix' => 'sample'], function () {
    Route::get('posts', function () {
        $posts = WinkPost::with('tags', 'author')
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->limit(8)
            ->get();
        return $posts;
    });
});
