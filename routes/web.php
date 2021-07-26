<?php

use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Auth::routes();

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function () {
    Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);
});


Route::prefix('admin')->middleware('can:manage-users')->group(function () {
    //USER GESTURE
    Route::get('/Dashbord', 'DashboardController@dash')->name('dashboard');
    Route::get('/profil', 'ProfilController@index')->name('profil.index');
    Route::match(['put', 'patch'], '/profil/{user}', 'ProfilController@update')->name('profil.update');

    //BOOK GESTURE
    Route::get('/books', 'BookController@index')->name('book.index');
    Route::post('/books', 'BookController@store')->name('book.store');
    Route::put('/books/{book}', 'BookController@update')->name('book.update');
    Route::delete('/books/{book}', 'BookController@destroy')->name('book.destroy');

    //LEAD GESTURE
    Route::get('/leads', 'LeadController@index')->name('lead.index');
});


Route::namespace('Vitrine')->name('vitrine.')->group(function () {
    //BOOK GESTURE
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/books', 'BookController@index')->name('book.index');
    Route::get('/books/free', 'BookController@getFreeBooks')->name('book.free');
    Route::get('/books/filter', 'BookController@filter')->name('book.filter');
    Route::get('/books/search', 'BookController@search')->name('book.search');
    Route::get('/books/{book}', 'BookController@show')->name('book.show');

    //CONTACT GESTURE
    Route::get('/contact', 'ContactController@index')->name('contact.index');
    Route::post('/contact', 'ContactController@store')->name('contact.store');

    //SERVICE GESTURE
    Route::get('/news', 'ActualityController@index')->name('news.index');
    Route::get('/services', 'ServiceController@index')->name('service.index');
    Route::get('/speciality', 'SpecialityController@index')->name('speciality.index');
});





// ***************************************Notification***********************
Route::get('showFromNotify/{commande}/{notification}', 'CommandeController@showFromNotify')->name('commandes.showFromNotify');
Route::get('showFromNotify/{reception}/{notification}', 'ReceptionController@showFromNotify')->name('reception.showFromNotify');
Route::get('/inbox', 'NotificationController@index')->name('inbox.index');
Route::get('/{notifications}/show', 'NotificationController@show')->name('inbox.show');
Route::get('/{notifications}/delete', 'NotificationController@destroy')->name('inbox.destroy');

// ***************************************Notification***********************
