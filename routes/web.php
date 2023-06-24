<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('' , [\App\Http\Controllers\FrontController::class , 'index']) -> name('index');
Route::get('about' , [\App\Http\Controllers\FrontController::class , 'about']) -> name('about');
Route::get('contact' , [\App\Http\Controllers\FrontController::class , 'contact']) -> name('contact');
Route::get('services' , [\App\Http\Controllers\FrontController::class , 'services']) -> name('services');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/slider', [App\Http\Controllers\SlideController::class, 'index'])->name('slider');
Route::post('/storeSliderData', [App\Http\Controllers\SlideController::class, 'store'])->name('storeSliderData');
Route::get('/deleteSlide/{id}', [App\Http\Controllers\SlideController::class, 'destroy'])->name('deleteSlide');

Route::get('/header', [App\Http\Controllers\HeaderController::class, 'index'])->name('header');
Route::post('/storeheaderData', [App\Http\Controllers\HeaderController::class, 'store'])->name('storeheaderData');

Route::get('/blogSection', [App\Http\Controllers\BlogSectionController::class, 'index'])->name('blogSection');
Route::post('/storeBlogSectionData', [App\Http\Controllers\BlogSectionController::class, 'store'])->name('storeBlogSectionData');

Route::get('/blogs', [App\Http\Controllers\BlogController::class, 'index'])->name('blogs');
Route::post('/storeBlog', [App\Http\Controllers\BlogController::class, 'store'])->name('storeBlog');
Route::get('/deleteBlog/{id}', [App\Http\Controllers\BlogController::class, 'destroy'])->name('deleteBlog');


Route::get('/getBlog/{id}', [App\Http\Controllers\FrontController::class, 'getBlog'])->name('getBlog');

Route::get('/statistics', [App\Http\Controllers\StatisticsController::class, 'index'])->name('statistics');
Route::post('/storeStatisticsData', [App\Http\Controllers\StatisticsController::class, 'store'])->name('storeStatisticsData');



Route::get('/aboutSection', [App\Http\Controllers\AboutSectionController::class, 'index'])->name('aboutSection');
Route::post('/storeAboutSectionData', [App\Http\Controllers\AboutSectionController::class, 'store'])->name('storeAboutSectionData');


Route::get('/opinions', [App\Http\Controllers\OpinionController::class, 'index'])->name('opinions');
Route::post('/storeOpinionData', [App\Http\Controllers\OpinionController::class, 'store'])->name('storeOpinionData');
Route::get('/deleteOpinion/{id}', [App\Http\Controllers\OpinionController::class, 'destroy'])->name('deleteOpinion');


Route::get('/clients', [App\Http\Controllers\ClientsController::class, 'index'])->name('clients');
Route::post('/storeClientsData', [App\Http\Controllers\ClientsController::class, 'store'])->name('storeClientsData');
Route::get('/deleteClient/{id}', [App\Http\Controllers\ClientsController::class, 'destroy'])->name('deleteClient');

Route::get('/footer', [App\Http\Controllers\FooterController::class, 'index'])->name('footer');
Route::post('/storeFooterData', [App\Http\Controllers\FooterController::class, 'store'])->name('storeFooterData');


Route::get('/aboutHeader', [App\Http\Controllers\AboutHeaderController::class, 'index'])->name('aboutHeader');
Route::post('/storeAboutHeaderData', [App\Http\Controllers\AboutHeaderController::class, 'store'])->name('storeAboutHeaderData');


Route::get('/aboutUsSection', [App\Http\Controllers\AboutUsController::class, 'index'])->name('aboutUsSection');
Route::post('/storeAboutUsData', [App\Http\Controllers\AboutUsController::class, 'store'])->name('storeAboutUsData');



Route::get('/team', [App\Http\Controllers\TeamSectionController::class, 'index'])->name('team');
Route::post('/storeTeam', [App\Http\Controllers\TeamSectionController::class, 'store'])->name('storeTeam');
Route::get('/deleteTeam/{id}', [App\Http\Controllers\TeamSectionController::class, 'destroy'])->name('deleteTeam');


Route::get('/serviceHeader', [App\Http\Controllers\ServiceHeaderController::class, 'index'])->name('serviceHeader');
Route::post('/storeServiceHeaderData', [App\Http\Controllers\ServiceHeaderController::class, 'store'])->name('storeServiceHeaderData');


Route::get('/service', [App\Http\Controllers\ServiceController::class, 'index'])->name('service');
Route::post('/storeService', [App\Http\Controllers\ServiceController::class, 'store'])->name('storeService');
Route::get('/deleteService/{id}', [App\Http\Controllers\ServiceController::class, 'destroy'])->name('deleteService');


Route::get('/contactHeader', [App\Http\Controllers\ContactHeaderController::class, 'index'])->name('contactHeader');
Route::post('/storeContactHeaderData', [App\Http\Controllers\ContactHeaderController::class, 'store'])->name('storeContactHeaderData');

Route::get('/contactInfo', [App\Http\Controllers\ContactInfoController::class, 'index'])->name('contactInfo');
Route::post('/storeContactInfo', [App\Http\Controllers\ContactInfoController::class, 'store'])->name('storeContactInfo');
















