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

Route::get('/', function () {
    return view('layouts.home');
});

Route::get('/lib', function () {
    return view('library');
});


Route::get('/student', function () {
    return view('student');
})->name('student');

Route::get('/grades', function () {
    return view('grades');
    // تعليمات للتعامل مع زر الدرجات
})->name('grades');

Route::get('/timetables', function () {
    return view('timetables');
    // تعليمات للتعامل مع زر الجداول الدراسية
})->name('timetables');

Route::get('/studyplan', function () {
    return view('studyplan');

})->name('studyplan');

Route::get('/college', function () {
    return view('college');
})->name('college');

Route::get('/registration', function () {
    return view('Electronic_registration');
});

Route::get('/home', function () {
    return view('layouts.home');
});

Route::get('/news', function () {
    return view('news');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/College of Computer', function () {
    return view('College of Computer');
});

Route::get('/College of Business
Administration', function () {
    return view('College of Business
    Administration');
});

Route::get('/College of Islamic Studies
and Quranic Sciences', function () {
    return view('College of Islamic Studies
    and Quranic Sciences');
});

Route::get('/College of Sharia and
Law', function () {
    return view('College of Sharia and
    Law');
});

Route::get('/College of Languages and
Translation', function () {
    return view('College of Languages and
    Translation');
});
