<?php

use App\Http\Controllers\PhoneBookController;
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

Route::get( '/', [ PhoneBookController::class, 'index' ] )->name( 'phone-book.index' );


// get, post, put/patch, delete

//Route::get( 'phone-book', [ PhoneBookController::class, 'index' ] )->name( 'phone-book.index' );
//Route::post( 'phone-book', [ PhoneBookController::class, 'store' ] )->name( 'phone-book.store' );
//
//Route::get( 'phone-book/create', [ PhoneBookController::class, 'create' ] )->name( 'phone-book.create' );
//Route::get( 'phone-book/{phoneBook}/edit', [ PhoneBookController::class, 'edit' ] )->name( 'phone-book.edit' );
//
//Route::get( 'phone-book/{phoneBook}', [ PhoneBookController::class, 'show' ] )->name( 'phone-book.show' );
//Route::put( 'phone-book/{phoneBook}', [ PhoneBookController::class, 'update' ] )->name( 'phone-book.update' );
//Route::delete( 'phone-book/{phoneBook}', [ PhoneBookController::class, 'destroy' ] )->name( 'phone-book.destroy' );

Route::resource('phone-book', PhoneBookController::class);
