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

Route::get('/coba', 'CekDataController@coba');

Route::prefix('/')->group(function () {

    Route::get('/', 'User\EgovController@index')->name('dashboard');
    Route::get('blog', 'User\EgovController@showBlog')->name('dashboard.blog');
    Route::get('about', 'User\EgovController@showAbout')->name('dashboard.about');
    Route::get('contact', 'User\EgovController@showContact')->name('dashboard.contact');
    Route::post('contact', 'User\EgovController@postContact')->name('submit_contact');
});

Route::get('depot-air', 'User\DepotAirController@index')->name('air.dashboard');
Route::group(['middleware' => ['auth'], 'prefix' => 'depot-air'], function () {

    Route::get('/data-pemohon', 'User\DepotAirController@pertama')->name('depot.data.pemohon');
    Route::get('/data-tempat', 'User\DepotAirController@kedua')->name('depot.data.tempat');
    Route::get('/data-cetak', 'User\DepotAirController@ketiga')->name('depot.data.pemilik');
    Route::get('/data-upload', 'User\DepotAirController@keempat')->name('depot.data.upload');
    Route::get('/data-konfirmasi', 'User\DepotAirController@kelima')->name('depot.data.konfirmasi');

    Route::post('data-savepertama', 'User\DepotAirController@savepertama')->name('depot.save.pertama');
    Route::post('data-savekedua', 'User\DepotAirController@savekedua')->name('depot.save.kedua');
    Route::get('data-saveketiga', 'User\DepotAirController@setsessionketiga')->name('depot.save.ketiga');
    Route::post('data-savekeempat', 'User\DepotAirController@savekeempat')->name('depot.save.keempat');
    Route::get('data-selesai', 'User\DepotAirController@selesai')->name('depot.save.kelima');

    Route::get('data-cetak-permohonan', 'User\DepotAirController@cetakpermohonan')->name('depot.cetak.permohonan');
    Route::get('data-cetak-uu', 'User\DepotAirController@cetakuu')->name('depot.cetak.uu');
    Route::get('data-cetak-bersedia', 'User\DepotAirController@bersedia')->name('depot.cetak.bersedia');

});
Route::get('hama', 'User\HamaController@index')->name('hama.dashboard');
Route::group(['middleware' => ['auth'], 'prefix' => 'hama'], function () {

    Route::get('/data-pemohon', 'User\HamaController@pertama')->name('hama.data.pemohon');
    Route::get('/data-tempat', 'User\HamaController@kedua')->name('hama.data.tempat');
    Route::get('/data-cetak', 'User\HamaController@ketiga')->name('hama.data.pemilik');
    Route::get('/data-upload', 'User\HamaController@keempat')->name('hama.data.upload');
    Route::get('/data-konfirmasi', 'User\HamaController@kelima')->name('hama.data.konfirmasi');


    Route::post('data-savepertama', 'User\HamaController@savepertama')->name('hama.save.pertama');
    Route::post('data-savekedua', 'User\HamaController@savekedua')->name('hama.save.kedua');
    Route::get('data-saveketiga', 'User\HamaController@setsessionketiga')->name('hama.save.ketiga');
    Route::post('data-savekeempat', 'User\HamaController@savekeempat')->name('hama.save.keempat');
    Route::get('data-selesai', 'User\HamaController@selesai')->name('hama.save.kelima');

    Route::get('data-cetak-permohonan', 'User\HamaController@cetakpermohonan')->name('hama.cetak.permohonan');
});

Route::get('apotek', 'User\ApotekController@index')->name('apotek.dashboard');
Route::group(['middleware' => ['auth'], 'prefix' => 'apotek'], function () {
    Route::get('cekdata', 'CekDataController@carinik');
    Route::get('carikota', 'CekDataController@carikota');
    Route::get('carikecamatan', 'CekDataController@carikecamatan');
    Route::get('caridesa', 'CekDataController@caridesa');

    Route::get('data-pemohon', 'CekDataController@index')->name('apotik.data.pemohon');
    Route::get('data-tempat', 'CekDataController@kedua')->name('apotik.data.tempat');
    Route::get('data-pemilik', 'CekDataController@ketiga')->name('apotik.data.pemilik');
    Route::get('data-alat', 'CekDataController@keempat')->name('apotik.data.alat');
    Route::get('data-apoteker', 'CekDataController@kelima')->name('apotik.data.apoteker');
    Route::get('data-cetak', 'CekDataController@keenam')->name('apotik.data.cetak');
    Route::get('data-upload', 'CekDataController@ketujuh')->name('apotik.data.upload');
    Route::get('data-konfirmasi', 'CekDataController@kedelapan')->name('apotik.data.konfirmasi');

    Route::post('data-savepertama', 'CekDataController@savepertama')->name('save.pertama');
    Route::post('data-savekedua', 'CekDataController@savekedua')->name('save.kedua');
    Route::post('data-saveketiga', 'CekDataController@saveketiga')->name('save.ketiga');
    Route::post('data-savekeempat', 'CekDataController@savekeempat')->name('save.keempat');
    Route::post('data-savekelima', 'CekDataController@savekelima')->name('save.kelima');
    Route::get('data-savekeenam', 'CekDataController@setsessionkeenam')->name('save.keenam');
    Route::post('data-saveketujuh', 'CekDataController@storagefile')->name('save.ketujuh');

    Route::get('data-cetak-permohonan', 'CekDataController@cetakpermohonan')->name('cetak.permohonan');
    Route::get('data-cetak-alat', 'CekDataController@cetakalat')->name('cetak.alat');
    Route::get('data-cetak-apoteker', 'CekDataController@cetakapoteker')->name('cetak.apoteker');
    Route::get('data-cetak-sarana', 'CekDataController@cetaksarana')->name('cetak.sarana');
    Route::get('data-cetak-uuapoteker', 'CekDataController@cetakuu')->name('cetak.uu');

    Route::get('data-selesai', 'CekDataController@selesai')->name('save.selesai');
});

Route::group(['middleware' => ['auth'], 'prefix' => 'member'], function () {
    Route::get('{user}/settings', 'User\UserController@showAccountSettings');
    Route::put('{user}', 'User\UserController@updateAccount');
    Route::get('history', 'User\UserController@showRiwayat');
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

    Route::get('tables/member-feedback', 'Admin\Tables\MemFeedController@index')->name('admin.tables.memfback');
    Route::get('tables/member-{id}/banned', 'Admin\Tables\MemFeedController@banned')->name('admin.tables.ban');
    Route::get('tables/member-{id}/restore', 'Admin\Tables\MemFeedController@restore')->name('admin.tables.res');

    Route::get('tables/perizinan', 'Admin\Tables\PerizinanController@index')->name('admin.tables.perizinan');

    Route::get('aktif/{id}', 'Admin\Tables\PerizinanController@aktif')->name('admin.tables.perizinan.aktif');
    Route::get('aktif/depo/{id}', 'Admin\Tables\PerizinanController@aktifdepo')->name('admin.tables.perizinan.aktif.depo');
    Route::get('aktif/hama/{id}', 'Admin\Tables\PerizinanController@aktifhama')->name('admin.tables.perizinan.aktif.hama');
});

Route::group(['middleware' => ['uptsa'], 'prefix' => 'uptsa'], function () {
    Route::get('dashboard', 'Admin\Sub\UPTSAController@index')->name('uptsa.dashboard');
});

Route::group(['middleware' => ['kasie'], 'prefix' => 'kasie'], function () {
    Route::get('dashboard', 'Admin\Sub\KASIEController@index')->name('kasie.dashboard');
});

Route::group(['middleware' => ['kabid'], 'prefix' => 'kabid'], function () {
    Route::get('dashboard', 'Admin\Sub\KABIDController@index')->name('kabid.dashboard');
});

Route::group(['middleware' => ['sekretaris'], 'prefix' => 'sekretaris'], function () {
    Route::get('dashboard', 'Admin\Sub\SEKRETARISController@index')->name('sekretaris.dashboard');
});

Route::group(['middleware' => ['kadin'], 'prefix' => 'kadin'], function () {
    Route::get('dashboard', 'Admin\Sub\KADINController@index')->name('kadin.dashboard');
});
