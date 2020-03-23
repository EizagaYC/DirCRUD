<?php

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::resource('direccion','DireccionController');


Route::get('/cancelar',function(){

	return redirect()->route('direccion.index')->with('error','¡Registro cancelado!');

})->name('cancelar');

