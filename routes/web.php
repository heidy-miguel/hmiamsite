<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ArticleController;
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

Route::prefix('perfil')
	->name('perfil.')
	->group(function(){
		Route::get('quem-foi-manuel-pedro-azancot-de-menezes', function(){
			return view('azancot_perfil');
		})->name('azancot-perfil');
	});

Route::controller(
	ArticleController::class)
	->prefix('articles')
	->name('articles.')
	->group(function(){
		Route::get('/search', 'search')->name('search');
		Route::get('/simple-index', 'simpleIndex')->name('simpleIndex');
		Route::get('/', 'index')->name('index');
		Route::post('/', 'store')->name('store'); 
		Route::get('/create', 'create')->name('create');
		Route::get('/{slug}', 'show')->name('show');
		Route::get('/{slug}/edit', 'edit')->name('edit');
		Route::put('/{slug}', 'update')->name('update');
		Route::get('/{id}', 'destroy')->name('destroy');
});

Route::post('contact-us', [ContactController::class, 'store'])->name('contact.store');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
