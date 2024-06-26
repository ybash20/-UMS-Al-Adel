<?php

use Illuminate\Support\Facades\Route;
use crocodicstudio\crudbooster\controllers\AdminController;
use App\Http\Controllers\BookLibraryController;


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


//Library Routs
Route::get('/library', 'BookLibraryController@library')->name('library');
Route::get('/books_{section}', 'BookLibraryController@showBooksBySection')->name('showBooksBySection');


//Content Routs
Route::get('/university_president', 'ContentController@university_president')->name('university_president');
Route::get('/SCBT_AlAdel', 'ContentController@SCBT_AlAdel')->name('SCBT_AlAdel');
Route::get('/Students_Affairs', 'ContentController@Students_Affairs')->name('Students_Affairs');
Route::get('/Foreign_relations', 'ContentController@Foreign_relations')->name('Foreign_relations');
Route::get('/University_Establishment', 'ContentController@University_Establishment')->name('University_Establishment');
Route::get('/University_guide', 'ContentController@University_guide')->name('University_guide');


//College Routs
Route::get('/college', function () {
    return view('college');
})->name('college');

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



Route::get('/registration', function () {
    return view('registration');
})->name('registration');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/forgot-password', function () {
    return view('forgot-password');
})->name('forgot-password');

Route::get('/translation', function () {
    return view('college.Translation');
})->name('translation');

Route::post('check-email', [AdminController::class, 'checkEmail'])->name('check-email');
Route::post('check-code', [AdminController::class, 'checkCode'])->name('check-code');
// Route::resource('grades', 'GradesController');

//Route::post('/send-email', [EmailController::class, 'send'])->name('send-email');

// Route::get('/verify-email', function () {
//     return view('auth.verify-email');
// })->name('verify-email');

// Route::post('/send-verification-email', [ForgotConroller::class, 'sendVerificationEmail'])
//      ->name('send-verification-email');

// Route::post('/verify-code', [ForgotConroller::class, 'verifyCode'])
//      ->name('verify-code');

//Route::post('check-email', ['uses' => 'AdminController@checkEmail', 'as' => 'checkEmail']);

//Route::post('check-email', ['uses' => 'AdminController@checkEmail', 'as' => 'checkEmail']);

