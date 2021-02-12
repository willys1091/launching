<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', "MainController@index");
Route::post('auth', "MainController@auth");
Route::get('forgot', "MainController@forgot");
Route::get('register', "MainController@register");
Route::post('register', "MainController@register_action");
Route::post('register_check_duplicate_email', "AjaxController@checkemail");

Route::middleware(['auth'])->group(function () {

    Route::get('dashboard', "MainController@dashboard");
    Route::get('home', 'MainController@home');


// people route
    Route::get('people', "PeopleController@index");
    Route::get('people/create', "PeopleController@create");
    Route::post('people', "PeopleController@store");
    Route::get('people/{id}/edit', "PeopleController@edit");
    Route::patch('people/{id}', "PeopleController@update");
    Route::post('people/active', "PeopleController@show");
    Route::get('people/{id}/detail', "PeopleController@detail");

// role route
    Route::get('role', "RoleController@index");
    Route::get('role/create', "RoleController@create");
    Route::post('role', "RoleController@store");
    Route::get('role/{id}/edit', "RoleController@edit");
    Route::patch('role/{id}', "RoleController@update");
    Route::post('role/active', "RoleController@show");

    Route::get('logs/{modul}', "MainController@log");

    Route::get('logout/{msg?}', "MainController@logout");       //Using optional parameter for message
});