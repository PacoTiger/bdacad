<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('users', 'Admin\UsersController');

Route::resource('tarifas', 'Admin\tarifasController');

Route::resource('alumnos', 'Admin\AlumnosController');

Route::resource('asignaturas', 'Admin\AsignaturasController');

Route::resource('profesores', 'Admin\ProfesoresController');

Route::resource('centros', 'Admin\CentrosController');