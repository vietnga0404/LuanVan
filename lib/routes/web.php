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
Route::get('/search', '\App\Http\Controllers\HomeController@search')->name('search');

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
        Route::get('/', '\App\Http\Controllers\Trainings\HomeController@getHome');
    });
    // Khoa
    Route::group(['prefix' => 'khoa'], function () {
        Route::get('/', '\App\Http\Controllers\Trainings\KhoaController@getKhoa');
        Route::post('/', '\App\Http\Controllers\Trainings\KhoaController@postKhoa');
        Route::get('edit/{id}', '\App\Http\Controllers\Trainings\KhoaController@getEditKhoa');
        Route::post('edit/{id}', '\App\Http\Controllers\Trainings\KhoaController@postEditKhoa');
        Route::get('delete/{id}', '\App\Http\Controllers\Trainings\KhoaController@getDeleteKhoa');
    });
    // Lớp
    Route::group(['prefix' => 'lop'], function () {
        Route::get('/', '\App\Http\Controllers\Trainings\LopController@getLop');
        Route::post('/', '\App\Http\Controllers\Trainings\LopController@postLop');
        Route::get('edit/{id}', '\App\Http\Controllers\Trainings\LopController@getEditLop');
        Route::post('edit/{id}', '\App\Http\Controllers\Trainings\LopController@postEditLop');
        Route::get('delete/{id}', '\App\Http\Controllers\Trainings\LopController@getDeleteLop');
    });
    // Môn
    Route::group(['prefix' => 'mon'], function () {
        Route::get('/', '\App\Http\Controllers\Trainings\MonController@getMon');
        Route::post('/', '\App\Http\Controllers\Trainings\MonController@postMon');
        Route::get('edit/{id}', '\App\Http\Controllers\Trainings\MonController@getEditMon');
        Route::post('edit/{id}', '\App\Http\Controllers\Trainings\MonController@postEditMon');
        Route::get('delete/{id}', '\App\Http\Controllers\Trainings\MonController@getDeleteMon');
        Route::get('danhsach/{id}', '\App\Http\Controllers\Trainings\MonController@getListLesson');
    });
    // Phân công
    Route::group(['prefix' => 'phancong'], function () {
        Route::get('/', '\App\Http\Controllers\Trainings\AssignController@getAssign');
        Route::get('mon', '\App\Http\Controllers\Trainings\AssignController@getMon');
        Route::get('{ma}/lop', '\App\Http\Controllers\Trainings\AssignController@getAddLop');
        Route::post('{ma}/lop', '\App\Http\Controllers\Trainings\AssignController@postAddLop');
        Route::get('lop', '\App\Http\Controllers\Trainings\AssignController@getLop');
        Route::get('{ma}/lop/{id}', '\App\Http\Controllers\Trainings\AssignController@getDetail')->name('phancong');
        Route::post('{ma}/lop/{id}', '\App\Http\Controllers\Trainings\AssignController@postDetail')->name('postDetail');

        Route::get('chitiet', '\App\Http\Controllers\Trainings\AssignController@getSchdule')->name('getSchdule');
        Route::get('{mon}/{lop}/edit', '\App\Http\Controllers\Trainings\AssignController@EditLichDay')->name('bdtEditLichDay');
        Route::post('{mon}/{lop}/edit', '\App\Http\Controllers\Trainings\AssignController@postEdit')->name('postEdit');
        Route::get('chitiet/delete/', '\App\Http\Controllers\Trainings\AssignController@getDelete')->name('Delete');
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
        Route::get('{mon}/{lop}/edit/', '\App\Http\Controllers\Departments\AssignController@EditGV')->name('EditGV');
        Route::post('{mon}/{lop}/edit/', '\App\Http\Controllers\Departments\AssignController@postEditGV')->name('postEditGV');
        Route::get('chitiet/delete/', '\App\Http\Controllers\Departments\AssignController@getDeleteGV')->name('DeleteGV');
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
    Route::group(['prefix' => 'lichday'], function () {
        Route::get('/', '\App\Http\Controllers\Lecturers\ScheduleController@getLich');
        Route::get('xemchitiet', '\App\Http\Controllers\Lecturers\ScheduleController@findLich')->name('findLich');
    });
});

////* Học Viên *//// 
Route::group(['prefix' => 'hocvien', 'middleware' => ['custom_auth']], function () {
    //Home
    Route::group(['prefix' => 'home'], function () {
        Route::get('/', '\App\Http\Controllers\Students\HomeController@getHome');
    });
    //Thời khóa biểu
    Route::group(['prefix' => 'thoikhoabieu'], function () {
        Route::get('/', '\App\Http\Controllers\Students\ScheduleController@getSchedule');
        Route::get('xemchitiet', '\App\Http\Controllers\Students\ScheduleController@findSchedule')->name('findSchedule');
    });
    //Thư viện
    Route::group(['prefix' => 'thuvien'], function () {
        Route::get('/', '\App\Http\Controllers\Students\LibraryController@index');
        Route::get('/loaisach/{id}', '\App\Http\Controllers\Students\LibraryController@getLoai');
        Route::get('/chitietsach/{id}', '\App\Http\Controllers\Students\LibraryController@getDetail');
    });
});

////* Admin *////
Route::group(['prefix' => 'admin', 'middleware' => ['custom_auth']], function () {
    Route::get('/login', '\App\Http\Controllers\LoginController@getLogin');
    Route::post('/login', '\App\Http\Controllers\LoginController@postLogin');

    Route::group(['prefix' => 'thongke'], function () {
        Route::get('/', '\App\Http\Controllers\Admins\AdminController@ThongKe');
        Route::get('khoa', '\App\Http\Controllers\Admins\StatisticController@getKhoa')->name('khoa');
        Route::get('lop', '\App\Http\Controllers\Admins\StatisticController@getLop')->name('lop');
        Route::get('mon', '\App\Http\Controllers\Admins\StatisticController@getMon')->name('mon');
        Route::get('baigiang/{id}', '\App\Http\Controllers\Admins\StatisticController@getBaiGiang')->name('baigiang');
        Route::get('giangvien', '\App\Http\Controllers\Admins\StatisticController@getGV')->name('giangvien');
        Route::get('lichday', '\App\Http\Controllers\Admins\StatisticController@getLichDay')->name('lichday');
        Route::get('lichday/chitiet', '\App\Http\Controllers\Admins\StatisticController@getSchdule')->name('chitietlich');
    });

    Route::group(['prefix' => 'taikhoan'], function () {
        Route::get('/', '\App\Http\Controllers\Admins\AdminController@TaiKhoan');
        Route::post('/', '\App\Http\Controllers\Admins\AdminController@postTaiKhoan');
        Route::get('khoa/{id}', '\App\Http\Controllers\Admins\AdminController@khoaTK')->name('khoaTK');
        Route::get('mo/{id}', '\App\Http\Controllers\Admins\AdminController@mokhoaTK')->name('mokhoaTK');
        Route::get('delete/{id}', '\App\Http\Controllers\Admins\AdminController@getDeleteTK');
    });

    Route::get('/timkiem', '\App\Http\Controllers\Admins\AdminController@TimKiem');
    Route::get('timkiem/ketqua', '\App\Http\Controllers\Admins\AdminController@search')->name('timkiem');

});
