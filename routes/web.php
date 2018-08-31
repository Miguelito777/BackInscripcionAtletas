<?php

Route::get('/', function () {
    return view('welcome');
});



Route::group(['middleware' => 'cors','prefix' => 'api/'], function() {
    Route::resource('categorias','CategoriaController'); /*CRUD de categorias para los atletas */
    Route::resource('atletas','AtletasController');
    Route::get('Registro','AtletasController@recibir');
    Route::get('AtletasTotal','EstadisticasController@Total_Atletas');
    Route::get('AtletasCategoria','EstadisticasController@Atletas_by_Categoria');
    Route::get('AtletasGenero', 'EstadisticasController@Atletas_by_Genero');
    Route::get('AtletasRama', 'EstadisticasController@Atletas_by_Rama');
    Route::get('competicion', 'CategoriaController@retornarCompeticion');
    //Route::post('competicion', 'CategoriaController@retornarCompeticion');
});
