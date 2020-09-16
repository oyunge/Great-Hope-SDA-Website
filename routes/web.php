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
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/events', function () {
    return view('events');
});
Route::get('/sermons', function () {
    return view('sermons');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/create', function () {
    return view('createEvent');
});
Route::get('/createSermon', function () {
    return view('createSermons');
});

Route::post('/contacts', [\App\Http\Controllers\ContactController::class,'postContact']);
Route::post('/events', [\App\Http\Controllers\EventsController::class,'store']);
Route::post('/index', [\App\Http\Controllers\EventsController::class,'index']);
Route::post('/sermons', [\App\Http\Controllers\SermonsController ::class,'store']);