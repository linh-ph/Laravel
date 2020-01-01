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

use Illuminate\Support\Facades\Route;


Route::get('dang-nhap', 'QuanTriVienController@login')->name('login');
Route::post('xy-lu-dang-nhap', 'QuanTriVienController@xulydangnhap')->name('postLogin');
Route::get('dang-xuat', 'QuanTriVienController@dangxuat')->name('dang-xuat');

// Route::middleware('auth')->group(function () {
// Layout Chính
Route::get('/', function () {
    return view('layout');
})->name('trang-chu');
Route::prefix('linh-vuc')->group(function () {
    Route::name('linh-vuc.')->group(function () {
        Route::get('/', 'LinhVucController@index')->name('danh-sach');
        Route::get('them-moi', 'LinhVucController@create')->name('them-moi');
        Route::post('them-moi', 'LinhVucController@store')->name('xu-ly-them-moi');
        Route::get('cap-nhat/{id}', 'LinhVucController@edit')->name('cap-nhat');
        Route::post('cap-nhat/{id}', 'LinhVucController@update')->name('xu-ly-cap-nhat');
        Route::get('xoa/{id}', 'LinhVucController@destroy')->name('xoa');
    });
});

Route::prefix('cau-hoi')->group(function () {
    Route::name('cau-hoi.')->group(function () {
        Route::get('/', 'CauHoiController@index')->name('danh-sach');
        Route::get('them-moi', 'CauHoiController@create')->name('them-moi');
        Route::post('them-moi', 'CauHoiController@store')->name('xu-ly-them-moi');
        Route::get('cap-nhat/{id}', 'CauHoiController@edit')->name('cap-nhat');
        Route::post('cap-nhat/{id}', 'CauHoiController@update')->name('xu-ly-cap-nhat');
        Route::get('xoa/{id}', 'CauHoiController@destroy')->name('xoa');
    });
});
Route::prefix('nguoi-choi')->group(function () {
    Route::name('nguoi-choi.')->group(function () {
        Route::get('/', 'NguoichoiController@index')->name('danh-sach');
        Route::get('them-moi', 'NguoichoiController@create')->name('them-moi');
        Route::post('them-moi', 'NguoichoiController@store')->name('xu-ly-them-moi');
        Route::get('cap-nhat/{id}', 'NguoichoiController@edit')->name('cap-nhat');
        Route::post('cap-nhat/{id}', 'NguoichoiController@update')->name('xu-ly-cap-nhat');
        Route::get('xoa/{id}', 'NguoichoiController@destroy')->name('xoa');
    });
});
Route::prefix('goi-credit')->group(function () {
    Route::name('goi-credit.')->group(function () {
        Route::get('/', 'GoicreditController@index')->name('danh-sach');
        Route::get('them-moi', 'GoicreditController@create')->name('them-moi');
        Route::post('them-moi', 'GoicreditController@store')->name('xu-ly-them-moi');
        Route::get('cap-nhat/{id}', 'GoicreditController@edit')->name('cap-nhat');
        Route::post('cap-nhat/{id}', 'GoicreditController@update')->name('xu-ly-cap-nhat');
        Route::get('xoa/{id}', 'GoicreditController@destroy')->name('xoa');
    });
});
Route::prefix('lich-su-mua-credit')->group(function () {
    Route::name('lich-su-mua-credit.')->group(function () {
        Route::get('/', 'LichSu_MuaCreditController@index')->name('danh-sach');
        Route::get('them-moi', 'LichSu_MuaCreditController@create')->name('them-moi');
        Route::post('them-moi', 'LichSu_MuaCreditController@store')->name('xu-ly-them-moi');
        Route::get('cap-nhat/{id}', 'LichSu_MuaCreditController@edit')->name('cap-nhat');
        Route::post('cap-nhat/{id}', 'LichSu_MuaCreditController@update')->name('xu-ly-cap-nhat');
        Route::get('xoa/{id}', 'LichSu_MuaCreditController@destroy')->name('xoa');
    });
});

Route::prefix('luot-choi')->group(function () {
    Route::name('luot-choi.')->group(function () {
        Route::get('/', 'LuotChoiController@index')->name('danh-sach');
        Route::get('them-moi', 'LuotChoiController@create')->name('them-moi');
        Route::post('them-moi', 'LuotChoiController@store')->name('xu-ly-them-moi');
        Route::get('cap-nhat/{id}', 'LuotChoiController@edit')->name('cap-nhat');
        Route::post('cap-nhat/{id}', 'LuotChoiController@update')->name('xu-ly-cap-nhat');
        Route::get('xoa/{id}', 'LuotChoiController@destroy')->name('xoa');
    });
});
Route::prefix('chi-tiet-luot-choi')->group(function () {
    Route::name('chi-tiet-luot-choi.')->group(function () {
        Route::get('/', 'ChiTietLuotChoiController@index')->name('danh-sach');
        Route::get('them-moi', 'ChiTietLuotChoiController@create')->name('them-moi');
        Route::post('them-moi', 'ChiTietLuotChoiController@store')->name('xu-ly-them-moi');
        Route::get('cap-nhat/{id}', "ChiTietLuotChoiController@edit")->name('cap-nhat');
        Route::post('cap-nhat/ {id}', 'ChiTietLuotChoiController@update')->name('xu-ly-cap-nhat');
        Route::get('xoa/{id}', 'ChiTietLuotChoiController@destroy')->name('xoa');
    });
});
Route::prefix('quan-tri-vien')->group(function () {
    Route::name('quan-tri-vien.')->group(function () {
        Route::get('/', 'QuanTriVienController@index')->name('danh-sach');
        Route::get('them-moi', 'QuanTriVienController@create')->name('them-moi');
        Route::post('them-moi', 'QuanTriVienController@store')->name('xu-ly-them-moi');
        Route::get('cap-nhat/{id}', 'QuanTriVienController@edit')->name('cap-nhat');
        Route::post('cap-nhat/{id}', 'QuanTriVienController@update')->name('xu-ly-cap-nhat');
        Route::get('xoa/{id}', 'QuanTriVienController@destroy')->name('xoa');
    });
});
Route::prefix('cau-hinh-diem')->group(function () {
    Route::name('cau-hinh-diem.')->group(function () {
        Route::get('/', 'CauHinhDiemCauHoiController@index')->name('danh-sach');
        Route::get('them-moi', 'CauHinhDiemCauHoiController@create')->name('them-moi');
        Route::post('them-moi', 'CauHinhDiemCauHoiController@store')->name('xu-ly-them-moi');
        Route::get('cap-nhat/{id}', 'CauHinhDiemCauHoiController@edit')->name('cap-nhat');
        Route::post('cap-nhat/{id}', 'CauHinhDiemCauHoiController@update')->name('xu-ly-cap-nhat');
        Route::get('xoa/{id}', 'CauHinhDiemCauHoiController@destroy')->name('xoa');
    });
});
Route::prefix('cau-hinh-app')->group(function () {
    Route::name('cau-hinh-app.')->group(function () {
        Route::get('/', 'CauHinhDiemAppController@index')->name('danh-sach');
        Route::get('them-moi', 'CauHinhDiemAppController@create')->name('them-moi');
        Route::post('them-moi', 'CauHinhDiemAppController@store')->name('xu-ly-them-moi');
        Route::get('cap-nhat/{id}', 'CauHinhDiemAppController@edit')->name('cap-nhat');
        Route::post('cap-nhat/{id}', 'CauHinhDiemAppController@update')->name('xu-ly-cap-nhat');
        Route::get('xoa/{id}', 'CauHinhDiemAppController@destroy')->name('xoa');
    });
});
Route::prefix('cau-hinh-tro-giup')->group(function () {
    Route::name('cau-hinh-tro-giup.')->group(function () {
        Route::get('/', 'CauHinhTroGiupController@index')->name('danh-sach');
        Route::get('them-moi', 'CauHinhTroGiupController@create')->name('them-moi');
        Route::post('them-moi', 'CauHinhTroGiupController@store')->name('xu-ly-them-moi');
        Route::get('cap-nhat/{id}', 'CauHinhTroGiupController@edit')->name('cap-nhat');
        Route::post('cap-nhat/{id}', 'CauHinhTroGiupController@update')->name('xu-ly-cap-nhat');
        Route::get('xoa/{id}', 'CauHinhTroGiupController@destroy')->name('xoa');
    });
});
// });
