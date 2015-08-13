<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/warrant'], function (Router $router) {
        $router->bind('acts', function ($id) {
            return app('Modules\Warrant\Repositories\ActsRepository')->find($id);
        });
        $router->resource('acts', 'ActsController', ['except' => ['show'], 'names' => [
            'index' => 'admin.warrant.acts.index',
            'create' => 'admin.warrant.acts.create',
            'store' => 'admin.warrant.acts.store',
            'edit' => 'admin.warrant.acts.edit',
            'update' => 'admin.warrant.acts.update',
            'destroy' => 'admin.warrant.acts.destroy',
        ]]);

        $router->bind('types', function ($id) {
            return app('Modules\Warrant\Repositories\TypesRepository')->find($id);
        });
        $router->resource('types', 'TypesController', ['except' => ['show'], 'names' => [
            'index' => 'admin.warrant.types.index',
            'create' => 'admin.warrant.types.create',
            'store' => 'admin.warrant.types.store',
            'edit' => 'admin.warrant.types.edit',
            'update' => 'admin.warrant.types.update',
            'destroy' => 'admin.warrant.types.destroy',
        ]]);
// append

});
