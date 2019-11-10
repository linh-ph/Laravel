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
    return view('layout_New');
})->name('dashboard');

Route::prefix('linh-vuc')->group(function(){
    Route::name('linh-vuc.')->group(function(){
        Route::get('/','LinhVucController@index')->name('danh-sach');
        Route::get('them-moi', 'LinhVucController@create')->name('them-moi');
        Route::post('them-moi', 'LinhVucController@store')->name('xu-ly-them-moi');
        Route::get('cap-nhat/{id}', 'LinhVucController@edit')->name('cap-nhat');
        Route::post('cap-nhat/{id}', 'LinhVucController@update')->name('xu-ly-cap-nhat');
        Route::get('xoa/{id}', 'LinhVucController@destroy')->name('xoa');
    });

});

Route::prefix('cau-hoi')->group(function(){
    Route::name('cau-hoi.')->group(function(){
        Route::get('/','CauHoiController@index')->name('danh-sach');
        Route::get('them-moi', 'CauHoiController@create')->name('them-moi');
        Route::post('them-moi', 'CauHoiController@store')->name('xu-ly-them-moi');
        Route::get('cap-nhat/{id}', 'CauHoiController@edit')->name('cap-nhat');
        Route::post('cap-nhat/{id}', 'CauHoiController@update')->name('xu-ly-cap-nhat');
        Route::get('xoa/{id}', 'CauHoiController@destroy')->name('xoa');
    });

});
Route::prefix('nguoi-choi')->group(function(){
    Route::name('nguoi-choi.')->group(function(){
        Route::get('/','NguoichoiController@index')->name('danh-sach');
        Route::get('them-moi', 'NguoichoiController@create')->name('them-moi');
        Route::post('them-moi', 'NguoichoiController@store')->name('xu-ly-them-moi');
        Route::get('cap-nhat/{id}', 'NguoichoiController@edit')->name('cap-nhat');
        Route::post('cap-nhat/{id}', 'NguoichoiController@update')->name('xu-ly-cap-nhat');
        Route::get('xoa/{id}', 'NguoichoiController@destroy')->name('xoa');
    });

});
Route::prefix('goi-credit')->group(function(){
    Route::name('goi-credit.')->group(function(){
        Route::get('/','CauHoiController@index')->name('danh-sach');
        Route::get('them-moi', 'CauHoiController@create')->name('them-moi');
        Route::post('them-moi', 'CauHoiController@store')->name('xu-ly-them-moi');
        Route::get('cap-nhat/{id}', 'CauHoiController@edit')->name('cap-nhat');
        Route::post('cap-nhat/{id}', 'CauHoiController@update')->name('xu-ly-cap-nhat');
        Route::get('xoa/{id}', 'CauHoiController@destroy')->name('xoa');
    });

});
Route::prefix('tro-giup')->group(function(){
    Route::name('tro-giup.')->group(function(){
        Route::get('/','CauHoiController@index')->name('danh-sach');
        Route::get('them-moi', 'CauHoiController@create')->name('them-moi');
        Route::post('them-moi', 'CauHoiController@store')->name('xu-ly-them-moi');
        Route::get('cap-nhat/{id}', 'CauHoiController@edit')->name('cap-nhat');
        Route::post('cap-nhat/{id}', 'CauHoiController@update')->name('xu-ly-cap-nhat');
        Route::get('xoa/{id}', 'CauHoiController@destroy')->name('xoa');
    });

});