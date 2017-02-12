<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'indexController@index' );
//Route::get('master', 'indexController@master' );
Route::get('error', 'errorController@errors' );
Route::get('about', 'aboutController@about' );
Route::get('contact', 'contactController@contact' );
Route::get('dream-beach', 'dreambeachController@dreambeach' );
Route::get('faqs', 'faqsController@faqs' );

Route::get('project-2col', 'project2colController@project2col' );
Route::get('project-3col', 'project3colController@project3col');
Route::get('services', 'servicesController@services' );
Route::get('single-blog', 'singleblogController@single-blog' );
Route::get('single-project', 'singleprojectController@singleproject' );

Route::get('civilarchitecture', 'servicesController@civilarchitecture' );
Route::get('communications', 'servicesController@communications' );
Route::get('construction', 'servicesController@construction' );
Route::get('electrical', 'servicesController@electrical' );
Route::get('industrial', 'servicesController@industrial' );
Route::get('mechanical', 'servicesController@mechanical' );




//---------------ADMIN SECTION -------------//

Route::get('/admin/index', 'AdminIndexController@index' );
Route::get('/admin/banner', ['uses' => 'BannerController@index', 'as' => 'banners.index'] );
Route::get('/admin/banner/create', ['uses' => 'BannerController@create', 'as' => 'banners.create'] );
Route::get('/admin/banner/{id}/edit', ['uses' => 'BannerController@edit', 'as' => 'banners.edit']);
Route::post('/admin/banner/{id?}', ['uses' => 'BannerController@store', 'as' => 'banners.store']);
Route::put('/admin/banner/{id}', ['uses' => 'BannerController@update', 'as' => 'banners.update']);
Route::delete('/admin/banner/{id}', ['uses' => 'BannerController@destroy', 'as' => 'banners.destroy']);


Route::get('/admin/contact', ['uses' => 'AdminContactController@index', 'as' => 'contact.index'] );

// Route::get('admin/banner/{id}/delete', ['uses' => 'BannerController@delete', 'as' => 'banners.delete']);