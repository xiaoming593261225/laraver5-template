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

Route::get('/', 'ClientController@index');

Route::get('home', 'HomeController@index');

Route::get('pogolms', [
    'as' => 'adminLogin',
    'uses' => 'Auth\AuthController@adminLogin'
    ]
);

Route::get('/sections/{id}/images', [
    'as' => 'clientSectionImages',
    'uses' => 'ClientController@getSectionImages'
]);

Route::post('authenticate', [
        'as' => 'authenticate',
        'uses' => 'Auth\AuthController@authenticate'
    ]
);

Route::group([
    'prefix' => 'admin/',
    'namespace' => 'Admin'
], function() {
    Route::get('/', [
        'as' => 'adminHome',
        'uses' => 'AdminController@index'
    ]);
    /*
     * ===========================================
     * IMAGE RELATED LINKS
     * ===========================================
     */
    Route::get('/images', [
        'as' => 'adminImages',
        'uses' => 'AdminController@images'
    ]);
    Route::post('/images/upload', [
        'as' => 'adminImagesUpload',
        'uses' => 'AdminController@uploadImage'
    ]);


    /*
     * ===========================================
     * COMMENT RELATED LINKS
     * ===========================================
     */
    Route::get('/comments', [
        'as' => 'adminComments',
        'uses' => 'AdminController@comments'
    ]);

    /*
     * ===========================================
     * SECTION RELATED LINKS
     * ===========================================
     */
    Route::get('/sections', [
        'as' => 'adminSections',
        'uses' => 'AdminController@sections'
    ]);
    Route::post('/sections/add', [
        'as' => 'adminSectionsAdd',
        'uses' => 'AdminController@addSection'
    ]);

    /*
     * ===========================================
     * PROFILE RELATED LINKS
     * ===========================================
     */
    Route::get('/profile', [
        'as' => 'adminProfile',
        'uses' => 'AdminController@profile'
    ]);
    Route::post('/profile', [
        'as' => 'adminProfileEdit',
        'uses' => 'AdminController@saveProfile'
    ]);
});