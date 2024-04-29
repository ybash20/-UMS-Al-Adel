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
    // تعليمات للتعامل مع زر الدرجات
})->name('grades');

Route::get('/timetables', function () {
    // تعليمات للتعامل مع زر الجداول الدراسية
})->name('timetables');

Route::get('/studyplan', function () {

})->name('studyplan');