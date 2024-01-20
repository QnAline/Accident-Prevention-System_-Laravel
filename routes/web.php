<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FakeApiController;
use App\Http\Controllers\feedbackController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/data', [FakeApiController::class, 'fetchData']);

Route::get('/data', [FakeApiController::class, 'fetchData']);
Route::get('/dashboard', [FakeApiController::class, 'index'])->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/feedback', [feedbackController::class, 'store'])->name('feedback_store');
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/privacyPolicy', function () {
    return view('privacy');
});
Route::get('/terms', function () {
    return view('terms');
});
Route::get('/feedback', function () {
    return view('feedback');
});


Route::get('/alldetails', [feedbackController::class, 'display'])->name('feedback_details')->middleware('auth');
Route::delete('/feedback/{id}', [feedbackController::class, 'deleteSensorData'])->name('deleteSensorData');
Route::get('/resource', function () {
    return view('resource');
});

Route::get('/edit/{id}', [feedbackController::class, 'FirstgetData'])->name('editSensorData');
Route::put('/edit/{id}', [feedbackController::class, 'updateData'])->name('updateData');



Route::get('/edit', function () {
    return view('edit');
});
