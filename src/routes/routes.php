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
    Route::get('/create',       $controllers->create)->name('vue-opd.create.root');
    Route::get('/{id}/create',  $controllers->create)->name('vue-opd.create.child');
    Route::post('/',            $controllers->store)->name('vue-opd.store');
    Route::get('/{id}',         $controllers->show)->name('vue-opd.show');
    Route::get('/{id}/edit',    $controllers->edit)->name('vue-opd.edit');
    Route::put('/{id}',         $controllers->update)->name('vue-opd.update');
    Route::delete('/{id}',      $controllers->destroy)->name('vue-opd.destroy');
});
