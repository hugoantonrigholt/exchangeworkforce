<?php

use App\Http\Controllers\VacancyController;
use App\Http\Controllers\MessageController;
use App\Mail\oVacancyReply;


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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

Route::get('vacatures', [VacancyController::class, 'index'])->name('vacatures');
Route::get('uitgelichte-vacatures', [VacancyController::class, 'prio_index'])->name('top-vacatures');
Route::get('interne-vacatures', [VacancyController::class, 'internal_index'])->name('interne-vacatures');
Route::get('vacatures/{id}', [VacancyController::class, 'detail'])->name('vacature');
Route::post('vacatures/{id}/sollicitatie', [MessageController::class, 'storeVacancyReply']);

Route::get('/opdrachtgevers', [VacancyController::class, 'employer'])->name('employer');

Route::post('contact/post', [MessageController::class, 'storeContact']);
Route::post('inschrijven/post', [MessageController::class, 'storeSubscription']);
Route::post('offerte-aanvragen/post', [MessageController::class, 'storeQoutation']);



// Route::get('/mail', function () {
//     Mail::to('email@email.com')->send(new oVacancyReply());

//     return new oVacancyReply();
// });


// Route::get('/opdrachtgevers', function () {
//     return view('about-employer');
// });
Route::get('/uitzendkrachten', function () {
    return view('about-employee');
});
Route::get('/', function () {
    return view('index');
});
// Route::get('/ons-team', function () {
//     return view('ons-team');
// });
Route::get('/onze-werkwijze', function () {
    return view('werkwijze');
});
Route::get('/diensten', function () {
    return view('diensten');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/inschrijven', function () {
    return view('inschrijven');
});
Route::get('/offerte-aanvragen', function () {
    return view('offerte-aanvragen');
});



Route::get('/uitzenden', function () {
    return view('uitzenden');
});
Route::get('/begeleiding', function () {
    return view('begeleiding');
});
Route::get('/inhouse', function () {
    return view('inhouse');
});
Route::get('/branches', function () {
    return view('branches');
});

Route::get('/disclaimer', function () {
    return view('legal.disclaimer');
});
Route::get('/cookieverklaring', function () {
    return view('legal.cookieverklaring');
});
Route::get('/privacyverklaring', function () {
    return view('legal.privacyverklaring');
});
