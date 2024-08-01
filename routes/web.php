<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookLibraryController;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\NewsController;

use App\Helpers\UMSRouter;


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

UMSRouter::route();

//Home Routes
Route::redirect('/', '/home');
Route::get('/home', 'home@index')->name('home');

//Library Routes
Route::get('/library', 'BookLibraryController@library')->name('library');
Route::get('/books/section/{section}', 'BookLibraryController@showBooksBySection')->name('showBooksBySection');

//Content Routes
Route::get('/university_president', 'ContentController@university_president')->name('university_president');
Route::get('/SCBT_AlAdel', 'ContentController@SCBT_AlAdel')->name('SCBT_AlAdel');
Route::get('/Students_Affairs', 'ContentController@Students_Affairs')->name('Students_Affairs');
Route::get('/Foreign_relations', 'ContentController@Foreign_relations')->name('Foreign_relations');
Route::get('/University_Establishment', 'ContentController@University_Establishment')->name('University_Establishment');
Route::get('/University_guide', 'ContentController@University_guide')->name('University_guide');

//colleges Routes
Route::get('/colleges/{id}', [CollegeController::class, 'show'])->name('colleges.show');

//Registration Routes
Route::get('/registration', [RegistrationController::class, 'create'])->name('registration');
Route::post('/registration', [RegistrationController::class, 'post_reg'])->name('post_reg');
Route::get('/getMajors/{collegeId}', [RegistrationController::class, 'getMajors']);
Route::get('/getDirectorates/{govId}', [RegistrationController::class, 'getDirectorates']);

//News Routes
Route::get('/news', [NewsController::class, 'getnews'])->name('news');
Route::get('/news_details/{id}', [NewsController::class, 'news_details'])->name('news.details');

//Check Email Code Routes
Route::post('check-email', [AdminController::class, 'checkEmail'])->name('check-email');
Route::post('check-code', [AdminController::class, 'checkCode'])->name('check-code');

//change Language Routes
Route::get('/change-language/{locale}', 'LanguageController@changeLanguage');
