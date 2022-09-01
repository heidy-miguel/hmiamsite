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

Auth::routes();

Route::prefix('servico')
	->name('servico.')
	->group(function(){
		Route::get('imagiologia', function(){
			return view('service.imagiologia');
		})->name('imagiologia');
		
		Route::get('pediatria', function(){
			return view('service.pediatria');
		})->name('pediatria');

		Route::get('uci-neonatal', function(){
			return view('service.uci_neonatal');
		})->name('uci-neonatal');

		Route::get('uci-adulto', function(){
			return view('service.uci_adulto');
		})->name('uci-adulto');
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
