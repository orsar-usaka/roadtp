<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/available-routes', [App\Http\Controllers\RouteController::class, 'index'])->name('available-routes');
Route::post('/available-route', [App\Http\Controllers\RouteController::class, 'show'])->name('available-route');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});

Route::get('/getCity/{id}', [DashboardController::class, 'getCity']);

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
    Route::get('/booking', [App\Http\Controllers\TransactionController::class, 'index'])->name('booking');
    Route::get('/payments', [App\Http\Controllers\HomeController::class, 'index'])->name('payments');
    Route::get('/promotion', [App\Http\Controllers\HomeController::class, 'index'])->name('promotion');
    Route::get('/travel-history', [App\Http\Controllers\HomeController::class, 'index'])->name('travel');
    Route::get('/support', [App\Http\Controllers\HomeController::class, 'index'])->name('support');
});

Route::group(['as'=>'admin.','prefix' => 'admin','middleware'=>['auth','admin']], function () {
    Route::get('dashboard', [AdminController::class,'index'])->name('dashboard');
});
