<?php

use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



Route::get('/', 'DashboardController@dash')->name('dashboard');

Route::get('/book', 'BookController@index')->name('book.index');

Route::post('/book', 'BookController@store')->name('book.store');


Route::get('/leads', 'LeadController@index')->name('lead.index');


Route::resource('/produit', 'ProduitController')->except([
    'create', 'edit'
])->middleware('can:gestion-stock');



Route::get('showFromNotify/{commande}/{notification}', 'CommandeController@showFromNotify')->name('commandes.showFromNotify');

Route::get('showFromNotify/{reception}/{notification}', 'ReceptionController@showFromNotify')->name('reception.showFromNotify');


Route::get('/profil', 'ProfilController@index')->name('profil.index');

Route::match(['put', 'patch'], '/profil/{user}', 'ProfilController@update')->name('profil.update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function () {
    Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);
});


Route::get('/inbox', 'NotificationController@index')->name('inbox.index');
Route::get('/{notifications}/show', 'NotificationController@show')->name('inbox.show');
Route::get('/{notifications}/delete', 'NotificationController@destroy')->name('inbox.destroy');
