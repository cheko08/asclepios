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
    *
    *
    *Pacientes Routes
    *
    */

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
    Route::post('pacientes/destroy/{id}', 'PacienteController@destroy');

    /**
    *
    *
    *Consultas
    *
    */

    /**
     * Ver todas las consultas del paciente
     */
    Route::get('consultas/{paciente_id}', 'ConsultaController@index');

     /**
     * Ver todas las consultas del paciente
     */
    Route::get('consultas/graficas/{paciente_id}', 'ConsultaController@indexGraficas');

    /**
     * Crear una consulta
     */
    Route::get('consultas/create/{paciente_id}', 'ConsultaController@create');

    /**
     * Guardar consulta
     */
    Route::post('consultas/store', 'ConsultaController@store');

    /**
     * Ver la consulta
     */
    Route::get('consultas/edit/{id}', 'ConsultaController@edit');

    /**
     * Editar consulta
     */
    Route::patch('consultas/update/{id}', 'ConsultaController@update');

    /**
     * Eliminar consulta
     */
    Route::post('consultas/destroy/{id}', 'ConsultaController@destroy');


    /**
    *
    *
    *Configuracion
    *
    */

    Route::get('configuracion/configuracion-personal', 'ConfiguracionController@configuracionPersonal');

    Route::patch('configuracion/updateConfiguracionPersonal/{id}', 'ConfiguracionController@updateConfiguracionPersonal');
    
    Route::get('configuracion/configuracion-seguridad', 'ConfiguracionController@configuracionSeguridad');

    Route::patch('configuracion/configuracion-seguridad/{id}','ConfiguracionController@cambiarContrasena'); 
       
});//end Authenticated users routes
