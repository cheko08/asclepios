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

// Authentication routes
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


//Authenticated users routes
Route::group(['middleware' => 'auth'], function () {

	/**
	 * Dashboard route
	 */
    Route::get('/', function ()    {
       return view('dashboard');
    });

    /**
     * Pacientes Route index
     */
    Route::get('pacientes', 'PacienteController@index');

    /**
     * Crear Paciente form route
     */
    Route::get('pacientes/create', 'PacienteController@create');

    /**
     * Guardar Paciente Route
     */
    Route::post('pacientes/store', 'PacienteController@store');

     /**
     * Mostrar Paciente Route
     */
    Route::get('pacientes/{id}', 'PacienteController@show');

     /**
     * Actualizar Paciente Route
     */
    Route::patch('pacientes/update/{id}', 'PacienteController@update');

    /**
     * Borrar Paciente Route
     */
    Route::get('pacientes/destroy/{id}', 'PacienteController@destroy');

    /**
    *
    *
    *Consultas
    *
    */

    Route::get('consultas/{paciente_id}', 'ConsultaController@index');

    Route::get('consultas/create/{paciente_id}', 'ConsultaController@create');

    Route::post('consultas/store', 'ConsultaController@store');

    Route::get('consultas/edit/{id}', 'ConsultaController@edit');

    Route::patch('consultas/update/{id}', 'ConsultaController@update');






});//end Authenticated users routes
