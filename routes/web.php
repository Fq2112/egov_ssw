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
Auth::routes();

Route::get('/', 'User\EgovController@index')->name('dashboard');
Route::post('/contact', 'EgovController@postContact')->name('submit_contact');

Route::group(['middleware' => ['auth'], 'prefix' => 'member'], function () {
    Route::get('{user}/settings', 'User\UserController@showAccountSettings');
    Route::put('{user}', 'User\UserController@updateAccount');
    Route::get('{user}/history', 'User\UserController@showOrderHistory');
    Route::get('{user}/history/print', 'User\UserController@printOrderHistory');
});

Route::prefix('admin')->group(function () {
    Route::get('dashboard', 'Admin\AdminController@index')->name('admin.dashboard');
    Route::get('/', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/', 'Admin\LoginController@login')->name('admin.login.submit');
    Route::post('logout', 'Admin\LoginController@logout')->name('admin.logout');
    Route::post('admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('admin-password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('admin-password/reset', 'Admin\ResetPasswordController@reset');
    Route::get('admin-password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('add', 'Admin\AdminController@add')->name('admin.add');
    Route::get('adminlist/{admin}/banned', 'Admin\AdminController@TableAdminDelete');
    Route::get('adminlist/{admin}/restore', 'Admin\AdminController@TableAdminRestore');
    Route::get('{admin}/settings', 'Admin\AdminController@showEditProfileForm');
    Route::put('{admin}', 'Admin\AdminController@updateAdmin');
});