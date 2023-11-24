<?php

use Illuminate\Support\Facades\Route;
use Carbon\Carbon;

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

Route::get('/', '\App\Http\Controllers\HomeController@getHome');
Route::get('/search', '\App\Http\Controllers\HomeController@search');

Route::get('/hoatdong', '\App\Http\Controllers\HomeController@getHoatDong');
Route::get('/thongtin', '\App\Http\Controllers\HomeController@getThongTin');
Route::get('/sukien', '\App\Http\Controllers\HomeController@getSuKien');
Route::get('/thongbao', '\App\Http\Controllers\HomeController@getThongBao');
Route::get('/vanban', '\App\Http\Controllers\HomeController@getVanBan');



Route::get('/login', '\App\Http\Controllers\LoginController@getLogin');
Route::post('/login', '\App\Http\Controllers\LoginController@postLogin');

Route::group(['prefix' => 'register'], function () {
    Route::get('/', '\App\Http\Controllers\LoginController@registerForm')->name('register.form');
    Route::post('/', '\App\Http\Controllers\LoginController@handleRegister')->name('register.handle');
});
Route::get('logout', '\App\Http\Controllers\LoginController@getLogout');


////* Ban Đào Tạo *//// 
Route::group(['prefix' => 'bandaotao', 'middleware' => ['custom_auth']], function () {
    // Home
    Route::group(['prefix' => 'home'], function () {
        Route::get('/', '\App\Http\Controllers\Admins\HomeController@getHome');
    });
    // Khoa
    Route::group(['prefix' => 'khoa'], function () {
        Route::get('/', '\App\Http\Controllers\Admins\KhoaController@getKhoa');
        Route::post('/', '\App\Http\Controllers\Admins\KhoaController@postKhoa');
        Route::get('edit/{id}', '\App\Http\Controllers\Admins\KhoaController@getEditKhoa');
        Route::post('edit/{id}', '\App\Http\Controllers\Admins\KhoaController@postEditKhoa');
        Route::get('delete/{id}', '\App\Http\Controllers\Admins\KhoaController@getDeleteKhoa');
    });
    // Lớp
    Route::group(['prefix' => 'lop'], function () {
        Route::get('/', '\App\Http\Controllers\Admins\LopController@getLop');
        Route::post('/', '\App\Http\Controllers\Admins\LopController@postLop');
        Route::get('edit/{id}', '\App\Http\Controllers\Admins\LopController@getEditLop');
        Route::post('edit/{id}', '\App\Http\Controllers\Admins\LopController@postEditLop');
        Route::get('delete/{id}', '\App\Http\Controllers\Admins\LopController@getDeleteLop');
    });
    // Môn
    Route::group(['prefix' => 'mon'], function () {
        Route::get('/', '\App\Http\Controllers\Admins\MonController@getMon');
        Route::post('/', '\App\Http\Controllers\Admins\MonController@postMon');
        Route::get('edit/{id}', '\App\Http\Controllers\Admins\MonController@getEditMon');
        Route::post('edit/{id}', '\App\Http\Controllers\Admins\MonController@postEditMon');
        Route::get('delete/{id}', '\App\Http\Controllers\Admins\MonController@getDeleteMon');
        Route::get('danhsach/{id}', '\App\Http\Controllers\Admins\MonController@getListLesson');
    });
    // Phân công
    Route::group(['prefix' => 'phancong'], function () {
        Route::get('/', '\App\Http\Controllers\Admins\AssignController@getAssign');
        Route::get('mon', '\App\Http\Controllers\Admins\AssignController@getMon');
        Route::get('{ma}/lop', '\App\Http\Controllers\Admins\AssignController@getAddLop');
        Route::post('{ma}/lop', '\App\Http\Controllers\Admins\AssignController@postAddLop');
        Route::get('lop', '\App\Http\Controllers\Admins\AssignController@getLop');
        Route::get('{ma}/lop/{id}', '\App\Http\Controllers\Admins\AssignController@getDetail')->name('phancong');
        Route::post('{ma}/lop/{id}', '\App\Http\Controllers\Admins\AssignController@postDetail')->name('postDetail');
        
        Route::get('chitiet', '\App\Http\Controllers\Admins\AssignController@getSchdule')->name('getSchdule');        
        Route::get('chitiet/edit/', '\App\Http\Controllers\Admins\AssignController@EditLichDay')->name('EditLichDay');
        Route::post('chitiet/edit/', '\App\Http\Controllers\Admins\AssignController@postEdit')->name('postEdit');
        Route::get('chitiet/delete/', '\App\Http\Controllers\Admins\AssignController@getDelete')->name('Delete');
    
    });
});

////* Lãnh Đạo Khoa *//// 
Route::group(['prefix' => 'lanhdaokhoa', 'middleware' => ['custom_auth']], function () {
    // Home
    Route::group(['prefix' => 'home'], function () {
        Route::get('/', '\App\Http\Controllers\Departments\HomeController@getHome');
    });
    // Giảng viên
    Route::group(['prefix' => 'giangvien'], function () {
        Route::get('/', '\App\Http\Controllers\Departments\LecturerController@getLecturer');
        Route::post('/', '\App\Http\Controllers\Departments\LecturerController@postLecturer');
        Route::get('edit/{id}', '\App\Http\Controllers\Departments\LecturerController@getEditLecturer');
        Route::post('edit/{id}', '\App\Http\Controllers\Departments\LecturerController@postEditLecturer');
        Route::get('delete/{id}', '\App\Http\Controllers\Departments\LecturerController@getDeleteLecturer');
    });
    //Bài giảng
    Route::group(['prefix' => 'baigiang'], function () {
        Route::get('/', '\App\Http\Controllers\Departments\LessonController@getLesson');
        Route::get('danhsach/{ma}', '\App\Http\Controllers\Departments\LessonController@getList');
        Route::post('danhsach/{ma}', '\App\Http\Controllers\Departments\LessonController@postLesson');
        Route::get('danhsach/{ma}/edit/{id}', '\App\Http\Controllers\Departments\LessonController@getEditLesson');
        Route::post('danhsach/{ma}/edit/{id}', '\App\Http\Controllers\Departments\LessonController@postEditLesson');
        Route::get('danhsach/{ma}/delete/{id}', '\App\Http\Controllers\Departments\LessonController@getDeleteLesson');
    });
    //Phân công
    Route::group(['prefix' => 'phancong'], function () {
        Route::get('/', '\App\Http\Controllers\Departments\AssignController@getList');
        Route::get('giangvien', '\App\Http\Controllers\Departments\AssignController@getGV')->name('getGV');
        Route::post('giangvien', '\App\Http\Controllers\Departments\AssignController@postGV')->name('postGV');

        Route::get('chitiet', '\App\Http\Controllers\Departments\AssignController@getSchduleGV')->name('getSchduleGV');        
        Route::get('chitiet/edit/', '\App\Http\Controllers\Departments\AssignController@EditGV')->name('EditGV');
        Route::post('chitiet/edit/', '\App\Http\Controllers\Departments\AssignController@postEdit')->name('postEdit');
        Route::get('chitiet/delete/', '\App\Http\Controllers\Departments\AssignController@getDelete')->name('Delete');
    });
});

////* Giảng Viên *//// 
Route::group(['prefix' => 'giangvien', 'middleware' => ['custom_auth']], function () {
    //Home
    Route::group(['prefix' => 'home'], function () {
        Route::get('/', '\App\Http\Controllers\Lecturers\HomeController@getHome');
    });
    //Lớp
    Route::get('lop', '\App\Http\Controllers\Lecturers\LecturerController@getLop');
    //Môn
    Route::group(['prefix' => 'mon'], function () {
        Route::get('/', '\App\Http\Controllers\Lecturers\LecturerController@getMon');
        Route::get('danhsach/{id}', '\App\Http\Controllers\Lecturers\LecturerController@getListBai');
    });
    //Lịch dạy
    Route::get('lichday', '\App\Http\Controllers\Lecturers\ScheduleController@getSchedule');
    Route::get('timlichday', '\App\Http\Controllers\Lecturers\ScheduleController@findSchedule')->name('findSchedule');

});

////* Học Viên *//// 
Route::group(['prefix' => 'hocvien'], function () {
    //Home
    Route::group(['prefix' => 'home'], function () {
        Route::get('/', '\App\Http\Controllers\Students\HomeController@getHome');
    });
    //Thời khóa biểu
    Route::group(['prefix' => 'thoikhoabieu'], function () {
        Route::get('/', '\App\Http\Controllers\Students\ScheduleController@getSchedule');
    });
    //Thư viện
    Route::group(['prefix' => 'thuvien'], function () {
        Route::get('/', '\App\Http\Controllers\Students\LibraryController@index');
        Route::get('/loaisach/{id}','\App\Http\Controllers\Students\LibraryController@getLoai');
        Route::get('/chitietsach/{id}','\App\Http\Controllers\Students\LibraryController@getDetail');

    });
});
