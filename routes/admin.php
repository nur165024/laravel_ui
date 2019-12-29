<?php

Route::group(['prefix' => 'admin'],function (){
    Route::get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Admin\LoginController@login')->name('admin.login.post');
    Route::get('logout', 'Admin\LoginController@logout')->name('admin.logout');

    Route::group(['middleware' => ['auth:admin']], function () {

        Route::get('/',function (){
            return view('admin.dashboard');
        })->name('admin.dashboard');

        // website setting routes
        Route::get('/settings', 'Admin\SettingController@index')->name('admin.settings');
        Route::post('/settings', 'Admin\SettingController@update')->name('admin.settings.update');

        //category route
        Route::resource('category','Admin\CategoryController',['names' => 'admin.category']);

        //attribute route
        Route::resource('attribute','Admin\AttributeController',['names' => 'admin.attribute']);

        //attribute value route
        Route::post('attributes/get-values', 'Admin\AttributeValueController@getValues');
        Route::post('attributes/add-values', 'Admin\AttributeValueController@addValues');
        Route::post('attributes/update-values', 'Admin\AttributeValueController@updateValues');
        Route::post('attributes/delete-values', 'Admin\AttributeValueController@deleteValues');

        //brands routes
        Route::resource('brand','Admin\BrandController',['names' => 'admin.brand']);

    });
});



