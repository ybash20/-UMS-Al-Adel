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
Route::redirect('/', '/home');

Route::get('/home', function () {
    return view('layouts.home');
})->name('home');

Route::get('/lib', function () {
    return view('library');
})->name('library');

Route::get('/student', function () {
    return view('student');
})->name('student');

Route::get('/grades', function () {
    return view('grades');
})->name('grades');

Route::get('/timetables', function () {
    return view('timetables');
})->name('timetables');

Route::get('/studyplan', function () {
    return view('studyplan');
})->name('studyplan');

Route::get('/college', function () {
    return view('college');
})->name('college');

Route::get('/registration', function () {
    return view('registration');
})->name('registration');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/computer', function () {
    return view('college.Computer');
})->name('computer');

Route::get('/business', function () {
    return view('college.Business');
})->name('business');

Route::get('/islamic', function () {
    return view('college.Islamic');
})->name('islamic');

Route::get('/sharia', function () {
    return view('college.Sharia');
})->name('sharia');

Route::get('/translation', function () {
    return view('college.Translation');
})->name('translation');
