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

Route::prefix('account')->group(function () {
    Route::get('activate','Auth\ActivationController@activate')->name('auth.activate');
    Route::get('captcha', 'Auth\ActivationController@showCaptcha')->name('captcha');
    Route::post('captcha', 'Auth\ActivationController@postCaptcha')->name('submit_captcha');
});

Route::prefix('/')->group(function () {
    Route::get('/', 'User\EgovController@index')->name('dashboard');
    Route::get('about', 'User\EgovController@showAbout')->name('dashboard.about');
    Route::get('contact', 'User\EgovController@showContact')->name('dashboard.contact');
    Route::post('contact', 'User\EgovController@postContact')->name('submit_contact');
});

Route::prefix('apotek')->group(function () {
    Route::get('/', 'User\ApotekController@index')->name('apotek.dashboard');
});

Route::prefix('depot-air')->group(function () {
    Route::get('/', 'User\DepotAirController@index')->name('air.dashboard');
});

Route::prefix('hama')->group(function () {
    Route::get('/', 'User\HamaController@index')->name('hama.dashboard');
});

Route::group(['middleware' => ['auth'], 'prefix' => 'member'], function () {
    Route::get('{user}/settings', 'User\UserController@showAccountSettings');
    Route::put('{user}', 'User\UserController@updateAccount');
    Route::get('{user}/history', 'User\UserController@showRiwayat');
    Route::get('{user}/history/print-apotek', 'User\UserController@printRiwayatApotek');
    Route::get('{user}/history/print-air', 'User\UserController@printRiwayatDepotAir');
    Route::get('{user}/history/print-hama', 'User\UserController@printRiwayatHama');
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