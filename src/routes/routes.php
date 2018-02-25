<?php

Route::group(['prefix' => 'api/vue-opd', 'middleware' => ['web']], function() {
    $controllers = (object) [
        'index'     => 'Bantenprov\VueOpd\Http\Controllers\VueOpdController@index',
        'create'    => 'Bantenprov\VueOpd\Http\Controllers\VueOpdController@create',
        'store'     => 'Bantenprov\VueOpd\Http\Controllers\VueOpdController@store',
        'show'      => 'Bantenprov\VueOpd\Http\Controllers\VueOpdController@show',
        'edit'      => 'Bantenprov\VueOpd\Http\Controllers\VueOpdController@edit',
        'update'    => 'Bantenprov\VueOpd\Http\Controllers\VueOpdController@update',
        'destroy'   => 'Bantenprov\VueOpd\Http\Controllers\VueOpdController@destroy',
    ];

    Route::get('/',             $controllers->index)->name('vue-opd.index');
    Route::get('/create',       $controllers->create)->name('vue-opd.create');
    Route::post('/',            $controllers->store)->name('vue-opd.store');
    Route::get('/{id}',         $controllers->show)->name('vue-opd.show');
    Route::get('/{id}/edit',    $controllers->edit)->name('vue-opd.edit');
    Route::put('/{id}',         $controllers->update)->name('vue-opd.update');
    Route::delete('/{id}',      $controllers->destroy)->name('vue-opd.destroy');
});

Route::group(['prefix' => 'api/vue-opd/root', 'middleware' => ['web']], function() {
    $controllers = (object) [
        'index'     => 'Bantenprov\VueOpd\Http\Controllers\VueOpdRootController@index',
        'create'    => 'Bantenprov\VueOpd\Http\Controllers\VueOpdRootController@create',
        'store'     => 'Bantenprov\VueOpd\Http\Controllers\VueOpdRootController@store',
        'show'      => 'Bantenprov\VueOpd\Http\Controllers\VueOpdRootController@show',
        'edit'      => 'Bantenprov\VueOpd\Http\Controllers\VueOpdRootController@edit',
        'update'    => 'Bantenprov\VueOpd\Http\Controllers\VueOpdRootController@update',
        'destroy'   => 'Bantenprov\VueOpd\Http\Controllers\VueOpdRootController@destroy',
    ];

    Route::get('/',             $controllers->index)->name('vue-opd.root.index');
    Route::get('/create',       $controllers->create)->name('vue-opd.root.create');
    Route::post('/',            $controllers->store)->name('vue-opd.root.store');
    Route::get('/{id}',         $controllers->show)->name('vue-opd.root.show');
    Route::get('/{id}/edit',    $controllers->edit)->name('vue-opd.root.edit');
    Route::put('/{id}',         $controllers->update)->name('vue-opd.root.update');
    Route::delete('/{id}',      $controllers->destroy)->name('vue-opd.root.destroy');
});

Route::group(['prefix' => 'api/vue-opd/child', 'middleware' => ['web']], function() {
    $controllers = (object) [
        'index'     => 'Bantenprov\VueOpd\Http\Controllers\VueOpdChildController@index',
        'create'    => 'Bantenprov\VueOpd\Http\Controllers\VueOpdChildController@create',
        'store'     => 'Bantenprov\VueOpd\Http\Controllers\VueOpdChildController@store',
        'show'      => 'Bantenprov\VueOpd\Http\Controllers\VueOpdChildController@show',
        'edit'      => 'Bantenprov\VueOpd\Http\Controllers\VueOpdChildController@edit',
        'update'    => 'Bantenprov\VueOpd\Http\Controllers\VueOpdChildController@update',
        'destroy'   => 'Bantenprov\VueOpd\Http\Controllers\VueOpdChildController@destroy',
    ];

    Route::get('/',             $controllers->index)->name('vue-opd.child.index');
    Route::get('/create',       $controllers->create)->name('vue-opd.child.create');
    Route::post('/',            $controllers->store)->name('vue-opd.child.store');
    Route::get('/{id}',         $controllers->show)->name('vue-opd.child.show');
    Route::get('/{id}/edit',    $controllers->edit)->name('vue-opd.child.edit');
    Route::put('/{id}',         $controllers->update)->name('vue-opd.child.update');
    Route::delete('/{id}',      $controllers->destroy)->name('vue-opd.child.destroy');
});
