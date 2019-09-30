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
Route::resource('direc_res','Programa_prueba');

/*Route::resource('tiqet','claseController');
*/
/*Route::get('/ruta_1',function(){
return 'hola';
});*/

//Route::get('/prue/{name}','Prueba_controller@prueba');

/*Route::get('/name/{name}/lastname/{lastname?}',function ($name,$lastname=null){
    return 'hola '.$name.' '.$lastname;
});
     parametros*/

