<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('ID/{id}',function($id) {
  echo 'ID: '.$id;
});

Route::get('user/{name?}', function ($name = 'TutorialsPoint') { 
  return $name;
});

Route::get('user/profile', 'UserController@showProfile')->name('profile');

Route::get('role',[
  'middleware' => 'Role:editor',
  'uses' => 'TestController@index',
]);