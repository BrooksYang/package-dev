<?php

Route::group(['prefix' => 'auth', 'middleware' => ['web', 'auth', 'permission'], 'namespace' => 'BrooksYang\Entrance\Controllers'], function () {

    // Groups
    Route::resource('groups', 'GroupController');

    // Modules
    Route::resource('modules', 'ModuleController');

    // Permissions
    Route::resource('permissions', 'PermissionController');

});