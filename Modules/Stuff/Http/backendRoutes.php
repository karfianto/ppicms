<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/stuff'], function (Router $router) {
    $router->bind('stuffs', function ($id) {
        return app('Modules\Stuff\Repositories\StuffRepository')->find($id);
    });
    get('stuffs', ['as' => 'admin.stuff.stuff.index', 'uses' => 'StuffController@index']);
    get('stuffs/create', ['as' => 'admin.stuff.stuff.create', 'uses' => 'StuffController@create']);
    post('stuffs', ['as' => 'admin.stuff.stuff.store', 'uses' => 'StuffController@store']);
    get('stuffs/{stuffs}/edit', ['as' => 'admin.stuff.stuff.edit', 'uses' => 'StuffController@edit']);
    put('stuffs/{stuffs}/edit', ['as' => 'admin.stuff.stuff.update', 'uses' => 'StuffController@update']);
    delete('stuffs/{stuffs}', ['as' => 'admin.stuff.stuff.destroy', 'uses' => 'StuffController@destroy']);
    $router->bind('categories', function ($id) {
        return app('Modules\Stuff\Repositories\CategoryRepository')->find($id);
    });
    get('categories', ['as' => 'admin.stuff.category.index', 'uses' => 'CategoryController@index']);
    get('categories/create', ['as' => 'admin.stuff.category.create', 'uses' => 'CategoryController@create']);
    post('categories', ['as' => 'admin.stuff.category.store', 'uses' => 'CategoryController@store']);
    get('categories/{categories}/edit', ['as' => 'admin.stuff.category.edit', 'uses' => 'CategoryController@edit']);
    put('categories/{categories}/edit', ['as' => 'admin.stuff.category.update', 'uses' => 'CategoryController@update']);
    delete('categories/{categories}', ['as' => 'admin.stuff.category.destroy', 'uses' => 'CategoryController@destroy']);
// append


});
