<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', '\App\Http\Controllers\LoginController@getLogin');


Route::group(['prefix' => 'bandaotao'], function () {
    // Thong tin ca nhan
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
    });
    // Phân công
    Route::group(['prefix' => 'phancong'], function () {
        Route::get('/', '\App\Http\Controllers\Admins\AssignController@getList');

        Route::get('add', function  () {return view('admins/phancong/adddanhsach');});

    });
});

Route::group(['prefix' => 'lanhdaokhoa'], function () {
    // Thông tin cá nhân
    Route::get('home', function () {
        return view('departments/home');
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
        
    });
    //Phân công
});

Route::group(['prefix' => 'lecturer'], function () {
    Route::get('home', function () {
        return view('lecturers/home');
    });
});

Route::group(['prefix' => 'student'], function () {
    Route::get('home', function () {
        return view('students/home');
    });
});
