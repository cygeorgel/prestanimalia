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
})->name('index');


Route::get('/centre-formation', function () {
    return view('centre-formation');
});



Route::post('/webcontact', 'WebsiteContactController@store');


Auth::routes();
Route::get('auth/{provider}', 'Auth\ProvidersController@redirectToProvider')->name('provider');
Route::get('auth/{provider}/callback', 'Auth\ProvidersController@handleProviderCallback');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

Route::get('/trainings/{training}', 'TrainingController@show');





Route::get('/registrations/{session}', 'RegistrationController@create');
Route::post('/registrations', 'RegistrationController@store');
Route::get('/registration/success', 'RegistrationController@success');

Route::get('/charge/{registration}', 'CheckoutController@pay');
Route::post('/charge', 'CheckoutController@charge');
