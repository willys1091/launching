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

// event route
    Route::get('event', "EventController@index");
    Route::get('event/create', "EventController@create");
    Route::post('event', "EventController@store");
    Route::get('event/{id}/edit', "EventController@edit");
    Route::patch('event/{id}', "EventController@update");
    Route::post('event/active', "EventController@show");
    Route::get('event/{id}/detail', "EventController@detail");

// Bank route
    Route::get('bank', "BankController@index");
    Route::get('bank/create', "BankController@create");
    Route::post('bank', "BankController@store");
    Route::get('bank/{id}/edit', "BankController@edit");
    Route::patch('bank/{id}', "BankController@update");
    Route::post('bank/active', "BankController@show");
    Route::get('bank/{id}/detail', "BankController@detail");

// City route
    Route::get('city', "CityController@index");
    Route::get('city/create', "CityController@create");
    Route::post('city', "CityController@store");
    Route::get('city/{id}/edit', "CityController@edit");
    Route::patch('city/{id}', "CityController@update");
    Route::post('city/active', "CityController@show");
    Route::get('city/{id}/detail', "CityController@detail");

// District route
    Route::get('district', "DistrictController@index");
    Route::get('district/create', "DistrictController@create");
    Route::post('district', "DistrictController@store");
    Route::get('district/{id}/edit', "DistrictController@edit");
    Route::patch('district/{id}', "DistrictController@update");
    Route::post('district/active', "DistrictController@show");
    Route::get('district/{id}/detail', "DistrictController@detail");

// Province route
    Route::get('province', "ProvinceController@index");
    Route::get('province/create', "ProvinceController@create");
    Route::post('province', "ProvinceController@store");
    Route::get('province/{id}/edit', "ProvinceController@edit");
    Route::patch('province/{id}', "ProvinceController@update");
    Route::post('province/active', "ProvinceController@show");
    Route::get('province/{id}/detail', "ProvinceController@detail");

// VIP Category route
    Route::get('vipcategory', "VipcategoryController@index");
    Route::get('vipcategory/create', "VipcategoryController@create");
    Route::post('vipcategory', "VipcategoryController@store");
    Route::get('vipcategory/{id}/edit', "VipcategoryController@edit");
    Route::patch('vipcategory/{id}', "VipcategoryController@update");
    Route::post('vipcategory/active', "VipcategoryController@show");
    Route::get('vipcategory/{id}/detail', "VipcategoryController@detail");

// VIP Name route
    Route::get('vipname', "VipnameController@index");
    Route::get('vipname/create', "VipnameController@create");
    Route::post('vipname', "VipnameController@store");
    Route::get('vipname/{id}/edit', "VipnameController@edit");
    Route::patch('vipname/{id}', "VipnameController@update");
    Route::post('vipname/active', "VipnameController@show");
    Route::get('vipname/{id}/detail', "VipnameController@detail");

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