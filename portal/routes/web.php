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

Route::get('/', 'PortalController@home')->name('home');

Route::post('/authenticate', 'PortalController@authenticate')->name('authenticate');

Route::get('/status', 'PortalController@status')->name('status');

Route::get('/admin', 'Admin\VoucherController@list')
    ->name('voucher list')
    ->middleware('auth');
Route::get('/admin/participants', 'Admin\ParticipantController@list')
    ->name('participant list')
    ->middleware('auth');
Route::get('/admin/participants/{participant}', 'Admin\ParticipantController@show')
    ->name('participant.show')
    ->middleware('auth');
Route::post('/admin/participants/{participant}', 'Admin\ParticipantController@addVoucher')
    ->name('participant.addvoucher')
    ->middleware('auth');

Auth::routes([
    'register' => false,
    'reset' => false,
    'confirm' => false,
    'verify' => false
]);
