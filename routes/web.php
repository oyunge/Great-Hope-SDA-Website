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

Route::get('/about', function () {
    return view('about');
});
// Route::get('/events', function () {
//     return view('events');
// });
// Route::get('/sermons', function () {
//     return view('sermons'); 
// });
// Route::get('/', function () {
//     return view('index'); 
// });
Route::get('/createDepartment', function(){
    return view('createDepartment');
    });
Route::get('/news', function(){
return view('createNewsPublication');
});
// Route::get('/departments', function () {
//     return view('department');
// });
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/create', function () {
    return view('createEvent');
});
Route::get('/createSermon', function () {
    return view('createSermons');
});


//Contact Controller
Route::post('/contacts', [\App\Http\Controllers\ContactController::class,'postContact']);

//Events Controller
Route::post('/events', [\App\Http\Controllers\EventsController::class,'store']);
Route::get('/events', [\App\Http\Controllers\EventsController::class,'index']);
//Sermons Controller

Route::get('/sermons', [\App\Http\Controllers\SermonsController::class,'index']);
Route::post('/sermon', [\App\Http\Controllers\SermonsController ::class,'store']);
//News Controller

Route::post('/newsPublication', [\App\Http\Controllers\newsPublicationController ::class,'store']);
Route::get('/newsPublication', [\App\Http\Controllers\newsPublicationController ::class,'index']);

// Department controllers
Route::post('/departments', [\App\Http\Controllers\departmentsController ::class,'store']);
Route::get('/departments', [\App\Http\Controllers\departmentsController ::class,'index']);