<?php

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', 'DashboardController@index');

    // Route::get('', ['middleware' => 'CheckPermission:2', 'uses' => '']);

    //MASTER
    //#CATEGORY ARTICLE
    Route::get('master/category_article', ['middleware' => 'CheckPermission:2', 'uses' => 'master\CategoryArticleController@index']);
    Route::get('master/category_article/add', ['middleware' => 'CheckPermission:2', 'uses' => 'master\CategoryArticleController@add']);
    Route::post('master/category_article/save', ['middleware' => 'CheckPermission:2', 'uses' => 'master\CategoryArticleController@save']);
    Route::get('master/category_article/delete/{id}', ['middleware' => 'CheckPermission:2', 'uses' => 'master\CategoryArticleController@delete']);
    Route::get('master/category_article/edit/{id}', ['middleware' => 'CheckPermission:2', 'uses' => 'master\CategoryArticleController@edit']);
    Route::get('master/category_article/update', ['middleware' => 'CheckPermission:2', 'uses' => 'master\CategoryArticleController@update']);

    //#ARTICLE
    Route::group(['middleware' => 'CheckPermission:2','prefix' => 'master/article'], function() {
        Route::get('/', 'master\ArticleController@index');
    });

    // PROFILE
    //#HISTORY
    Route::group(['middleware' => 'CheckPermission:2','prefix' => 'profile/history'], function() {
        Route::get('/', 'profile\HistoryController@index');
    });

    //#VISIONMISSION
    Route::group(['middleware' => 'CheckPermission:2','prefix' => 'profile/vision'], function() {
        Route::get('/', 'profile\VisionController@index');
    });

    //#GEOGRAPHY
    Route::group(['middleware' => 'CheckPermission:2','prefix' => 'profile/geography'], function() {
        Route::get('/', 'profile\GeographyController@index');
    });

    //INFORMATION
    //#ANNOUNCEMENT
    Route::get('information/announcement', ['middleware' => 'CheckPermission:2', 'uses' => 'information\AnnouncementController@index']);
    Route::get('information/announcement/add', ['middleware' => 'CheckPermission:2', 'uses' => 'information\AnnouncementController@add']);
    Route::post('information/announcement/save', ['middleware' => 'CheckPermission:2', 'uses' => 'information\AnnouncementController@save']);
    Route::get('information/announcement/delete/{id}', ['middleware' => 'CheckPermission:2', 'uses' => 'information\AnnouncementController@delete']);
    Route::get('information/announcement/edit/{id}', ['middleware' => 'CheckPermission:2', 'uses' => 'information\AnnouncementController@edit']);
    Route::post('information/announcement/update',['middleware' => 'CheckPermission:2', 'uses' => 'information\AnnouncementController@update']);

    //#AGENDA
    Route::get('information/agenda', ['middleware' => 'CheckPermission:2', 'uses' => 'information\AgendaController@index']);
    Route::get('information/agenda/add', ['middleware' => 'CheckPermission:2', 'uses' => 'information\AgendaController@add']);
    Route::post('information/agenda/save', ['middleware' => 'CheckPermission:2', 'uses' => 'information\AgendaController@save']);
    Route::get('information/agenda/delete/{id}', ['middleware' => 'CheckPermission:2', 'uses' => 'information\AgendaController@delete']);
    Route::get('information/agenda/edit/{id}', ['middleware' => 'CheckPermission:2', 'uses' => 'information\AgendaController@edit']);
    Route::post('information/agenda/update', ['middleware' => 'CheckPermission:2', 'uses' => 'information\AgendaController@update']);

    //#PEMBANGUNAN
    Route::group(['middleware' => 'CheckPermission:2','prefix' => '/information/project'], function() {
        Route::get('/', 'information\ProjectController@index');
    });

    //#FINANCE

    //STORE

    //USER

});
