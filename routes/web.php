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

Route::get('/', function () {
    return view('welcome');
});




Auth::routes();
Route::get('/extra/request', 'ExtraGasCylinderController@create')->name('extra.cylinder');
Route::post('/extra/request/store', 'ExtraGasCylinderController@store')->name('extra.cylinder.store');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');
Route::get('/user/history', 'HomeController@user_history')->name('user.historyy');

Route::get('/payment/get', 'PaymentController@create')->name('payment.get');
Route::post('/payment/submit', 'PaymentController@store')->name('payment.submit');




Route::prefix('admin')->group(function () {
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/register', 'Auth\AdminRegisterController@showRegistrationForm')->name('admin.register');
    Route::post('/register', 'Auth\AdminRegisterController@register')->name('admin.register.submit');
    Route::get('/stock', 'StockController@create')->name('product.stock');
    Route::post('/stock/store', 'StockController@store')->name('product.stock.store');
    Route::get('/distributor/create', 'GasCylinderController@create')->name('distributor.create');
    Route::post('/distributor/store', 'GasCylinderController@store')->name('distributor.cylinder.store');
    Route::get('/company/create', 'CompanyController@create')->name('company.create');
    Route::post('/company/store', 'CompanyController@store')->name('company.store');
    Route::get('/approve/list', 'AdminController@isapprove')->name('approve.status');
    Route::put('/approve/store/{id}', 'AdminController@store')->name('approve.status.submit');
    Route::get('/total/stock/quantity', 'StockController@show')->name('total.stock.quantity');
    Route::get('/history/{id}', 'AdminController@history')->name('user.history');
    Route::get('/user_history_list', 'AdminController@user_history_list')->name('user.history.list');
});
