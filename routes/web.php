<?php

use Illuminate\Support\Facades\Route;
use crocodicstudio\crudbooster\controllers\AdminController;
use App\Http\Controllers\BookLibraryController;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\RegistrationController;

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
// Route::get('/college', function () {
//     return view('college');
// })->name('college');

Route::get('/computer', [CollegeController::class, 'computer'])->name('computer');
Route::get('/business', [CollegeController::class, 'business'])->name('business');
Route::get('/islamic', [CollegeController::class, 'islamic'])->name('islamic');
Route::get('/sharia', [CollegeController::class, 'sharia'])->name('sharia');
Route::get('/Translation_College', [CollegeController::class, 'Translation_College'])->name('Translation_College');
// Route::get('/business', function () {Route::get('/business', [CollegeController::class, 'business'])->name('business');
//     return view('college.Business');
// })->name('business');

// Route::get('/islamic', function () {
//     return view('college.Islamic');
// })->name('islamic');

// Route::get('/sharia', function () {
//     return view('college.Sharia');
// })->name('sharia');

Route::get('/registration', [RegistrationController::class, 'create'])->name('registration');
Route::post('/registration', [RegistrationController::class, 'post_reg'])->name('post-reg');

// Route::get('/registration', function () {
//     return view('registration');
// })->name('registration');

Route::get('/news', function () {
    return view('news.news');
})->name('news');

Route::get('/forgot-password', function () {
    return view('forgot-password');
})->name('forgot-password');

// Route::get('/translation', function () {
//     return view('college.Translation');
// })->name('translation');

Route::post('check-email', [AdminController::class, 'checkEmail'])->name('check-email');
Route::post('check-code', [AdminController::class, 'checkCode'])->name('check-code');
