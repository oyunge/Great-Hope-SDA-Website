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

// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/events', function () {
//     return view('events');
// });
// Route::get('/sermons', function () {
//     return view('sermons'); 
// });
// Route::get('/', function () {
//     return view('index'); 
// });
Route::get('/addDepartment', function(){
    return view('/admin/addDepartment');
    });
Route::get('/addNews', function(){
return view('/admin/addNewsPublication');
});
// Route::get('/departments', function () {
//     return view('department');
// });
Route::get('/contact', function () {
    return view('contact');
});
// Route::get('/pastor', function () {
//     return view('addpastor');
// });
Route::get('/addEvent', function () {
    return view('/admin/addEvent');
});
Route::get('/addSermon', function () {
    return view('/admin/addSermons');
});
Route::get('/addInfo', function () {
    return view('/admin/addinfo');
});

Route::get('/admin', function () {
    return view('admin');
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
Route::get('/', [\App\Http\Controllers\newsPublicationController ::class,'index']);

// Department controllers
Route::post('/departments', [\App\Http\Controllers\departmentsController ::class,'store']);
Route::get('/departments', [\App\Http\Controllers\departmentsController ::class,'index']); 

// about us controller 
Route::post('/about', [\App\Http\Controllers\AboutUsController ::class,'store']);
Route::get('/about', [\App\Http\Controllers\AboutUsController ::class,'index']);










