<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['prefix' => 'v1', 'middleware' => 'auth:api'], function () {
    Route::post('logout', 'Auth\LoginController@logout');
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::patch('settings/profile', 'Settings\ProfileController@update');
    Route::patch('settings/password', 'Settings\PasswordController@update');


});

Route::group(['prefix' => 'v1', 'middleware' => 'guest:api'], function () {
    Route::post('login', 'Auth\LoginController@login');
    Route::post('register', 'Auth\RegisterController@register');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
});


Route::group(['prefix' => 'v1', 'middleware' => 'cors'],function () {

    //header('Access-Control-Allow-Origin: *');
    Route::get('atractivo','AtractivosApiController@index')->name('atractivo.index');

    Route::patch('atractivo/{hashid}', 'AtractivosApiController@update')->name('atractivo.update');

    Route::post('atractivo', 'AtractivosApiController@create')->name('atractivo.create');

    Route::get('atractivo/{id}','AtractivosApiController@show')->name('atractivo.show');

    Route::post('file','AtractivosApiController@store')->name('atractivo.store');

    Route::resource('atractivo', 'AtractivosApiController', ['except' => ['create','index','update','show','store','edit']]);

    //!Route::post('imgsubmit', 'ImageController@imgsubmit')->name('image.imgsubmit');

    Route::get('categoria','AtractivosApiController@categorias');
    Route::get('categoria/{id}','AtractivosApiController@categoria');

    Route::get('galeria','GaleriaApiController@galerias')->name('galeria.galerias');

    Route::get('galeria/{id}','GaleriaApiController@galeria')->name('galeria.galeria');

    Route::post('galeria','GaleriaApiController@create')->name('galeria.create');

    Route::delete('galeria/{id}','GaleriaApiController@destroy')->name('galeria.destroy');

    Route::get('lugares','AtractivosApiController@lugares');
    Route::get('lugar/{id}','AtractivosApiController@lugar');

    Route::get('translations/{locale}', 'TranslationController@show');
    Auth::routes();

});
Route::group(['prefix' => 'v1/movil', 'middleware' => 'cors'],function(){
    Route::resource('user', 'UserMovilController');
    Route::post('checkuser', 'UserMovilController@checkuser')->name('user.checkuser');
});
