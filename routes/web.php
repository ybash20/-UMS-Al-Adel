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
    return view('layouts.master');
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

    return view('Electronic registration');
})->name('college');

