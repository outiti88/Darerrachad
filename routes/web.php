<?php

use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Auth::routes();

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function () {
    Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);
});

Route::get('/', 'DashboardController@dash')->name('dashboard');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profil', 'ProfilController@index')->name('profil.index');
Route::match(['put', 'patch'], '/profil/{user}', 'ProfilController@update')->name('profil.update');

Route::get('/books', 'BookController@index')->name('book.index');
Route::post('/books', 'BookController@store')->name('book.store');
Route::delete('/books/{book}', 'BookController@destroy')->name('book.destroy');



Route::get('/leads', 'LeadController@index')->name('lead.index');



/***************************************Notification*********************** */
Route::get('showFromNotify/{commande}/{notification}', 'CommandeController@showFromNotify')->name('commandes.showFromNotify');
Route::get('showFromNotify/{reception}/{notification}', 'ReceptionController@showFromNotify')->name('reception.showFromNotify');
Route::get('/inbox', 'NotificationController@index')->name('inbox.index');
Route::get('/{notifications}/show', 'NotificationController@show')->name('inbox.show');
Route::get('/{notifications}/delete', 'NotificationController@destroy')->name('inbox.destroy');

/***************************************Notification*********************** *



