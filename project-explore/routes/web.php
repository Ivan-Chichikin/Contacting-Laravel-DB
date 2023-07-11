<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;

use App\Models\Contacts;
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

Route::get('/', function () {
    return view('home');
}) -> name('home');

Route::get('/about', function () {
    return view('about');
}) -> name('about'); 

Route::get('/contacts', function () {
    return view('contacts');
}) -> name('contacts');

Route::post('/contacts/submit', function () {
    return Request::all();
}) -> name('contacts-form');

Route::get('/contacts/submit', [ContactsController::class, 'submitFC']);
Route::get('/contacts-data', [ContactsController::class, 'allData']) -> name('contacts-data');
Route::get('/contacts-data/{id}', [ContactsController::class, 'showOneMessage']) -> name('contacts-data-one');
Route::get('/contacts-data/{id}/update', [ContactsController::class, 'updateMessage']) -> name('message-update');
Route::get('/contacts-data/{id}/delete', [ContactsController::class, 'deleteMessage']) -> name('message-delete');
Route::post('/contacts-data/{id}/update', [ContactsController::class, 'updateMessageSubmit']) -> name('message-update-submit');

Route::post('/about/submit', function () {
    return Request::all();
}) -> name('about-form');
