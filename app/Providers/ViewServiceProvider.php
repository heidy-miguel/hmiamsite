<?php
namespace	App\Providers;
use	App\View\Composers\ProfileComposer;
use	Illuminate\Support\Facades\View;
use	Illuminate\Support\ServiceProvider;
use App\Models\Article;
class	ViewServiceProvider	extends	ServiceProvider
{
	public function register()
	{

	}

	public function boot()
	{
		// View::composer('article.sidebar', function($view){
		// 	$articles = Article::orderBy('id', 'desc')->take(5)->get();
		// 	$view->with('articles', $articles);

		View::composer('home', function($view){
			$articles = Article::orderBy('id', 'desc')->take(3)->get();
			$view->with('articles', $articles);

		});
	}
}