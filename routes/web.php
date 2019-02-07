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

/**
 * Default/Public User Authentication Routes
 */
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

/**
 * User Pages Routes
 */

/**
 * Admin Pages Routes
 */
Route::prefix('kpanel')->group(
    function () {
        /**
         * Admin Home
         */
        Route::get('/', 'AdminController@index')->name('kpanel');
        /**
         * Admin Logon
         */
        Route::get('/login', 'Auth\AdminLoginController@showLoginForm')
            ->name('kpanel.login');
        Route::post('/login', 'Auth\AdminLoginController@login')
            ->name('kpanel.processLogin');
        Route::get('/logout', 'Auth\AdminLoginController@logout')
            ->name('kpanel.logout');

        /**
         * Reset Admin Password
         */
        Route::prefix('password')->group(
            function () {
                Route::get('/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('kpanel.password.request'); // step 1
                Route::post('/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('kpanel.password.email'); // step 2
                Route::get('/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('kpanel.password.reset'); // step 3
                Route::post('/reset', 'Auth\AdminResetPasswordController@reset'); // step 4
            }
        );
    }
);
