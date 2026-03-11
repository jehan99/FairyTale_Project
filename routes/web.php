<?php

use App\Http\Controllers\FormController;
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
    return view('pages.homePg');
})->name('directHomePg');

Route::get('/services', function () {
    return view('pages.ServicesPg');
}) ->name('directServicesPg');

Route::get('/about-us', function () {
    return view('pages.aboutUsPg');
})->name('directAboutUsPg');

Route::get('/contact-us', function () {
    return view('pages.contactUsPg');
})->name('directContactUsPg');

Route::get('/request-qoute', function () {
    return view('pages.requestQoutePg');
})->name('directRequestQuotePg');   

Route::post('/submit-form', [FormController::class, 'submit'])->name('form.submit');


Route::get('/packages', function () {
    return view('pages.packagesPg');
})->name('directPakagesPg');   


// ALBUMS ROUTES 
 
Route::get('/album1', function () {
    return view('pages.albums.album1');
})->name('directAlbum1Pg');   

Route::get('/album2', function () {
    return view('pages.albums.album2');
})->name('directAlbum2Pg');   

Route::get('/album3', function () {
    return view('pages.albums.album3');
})->name('directAlbum3Pg');   


Route::get('/album4', function () {
    return view('pages.albums.album4');
})->name('directAlbum4Pg');   

Route::get('/album5', function () {
    return view('pages.albums.album5');
})->name('directAlbum5Pg');   

Route::get('/album6', function () {
    return view('pages.albums.album6');
})->name('directAlbum6Pg');   
