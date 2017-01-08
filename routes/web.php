<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('admin/pacientes', 'Admin\\PacientesController');
Route::resource('admin/farmacia', 'Admin\\FarmaciaController');
Route::resource('admin/funcionarios', 'Admin\\FuncionariosController');
Route::resource('admin/laboratorio', 'Admin\\LaboratorioController');