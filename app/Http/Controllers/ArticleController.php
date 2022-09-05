<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Scopes\ActiveScope;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class ArticleController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth', ['except' => ['index', 'search']]);
    // }
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$articles = Article::latest()->paginate(5);
        $articles = Article::all();
        return view('article.index')->withArticles($articles);
    }

    public function simpleIndex()
    {
        $articles = Article::withoutGlobalScope(ActiveScope::class)->latest()->get();
        return view('article.simple-index')->withArticles($articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreArticleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticleRequest $request)
    {
        //
        //$this->authorize('store', Article::class);

        $validated = $request->validated();
        $validated = $request->safe()->all();
        $article = new Article();

        $article->title = $validated['title'];
        $article->slug = Str::slug($article->title, '-');
        $article->body = $validated['body'];
        $article->user_id = Auth::id();
                
        $article->image = $request->file('image')->store('public/article-images');
        $article->save();
        $request->session()->flash('message', 'Criado com sucesso!');
        return redirect()->route('articles.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($slug) 
    {
        //
        $article = Article::whereSlug($slug)->firstOrFail();
        return view('article.show')->withArticle($article);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        //
        $article = Article::withoutGlobalScope(ActiveScope::class)->whereSlug($slug)->firstOrFail(); 
        //$article = Article::whereSlug($slug)->firstOrFail(); 
        return view('article.edit')->withArticle($article);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateArticleRequest  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArticleRequest $request, $slug)
    {
        //
        $article = Article::withoutGlobalScope(ActiveScope::class)->whereSlug($slug)->firstOrFail();
        //$this->authorize('update article', $article);

        $validated = $request->validated();
        $validated = $request->safe()->all();

        $article->title = $validated['title'];
        $article->slug = Str::slug($article->title, '-');
        $article->body = $validated['body'];
        $article->user_id = Auth::id();

        if($request->has('active')){
            $article->active = 1;
        } else {
            $article->active = 0;
        }

        if($request->hasFile('image')){
            Storage::delete($article->image);
            $article->image = $request->file('image')->store('public/article-images');
        }


        $article->save();
        $request->session()->flash('message', 'Criado com sucesso!');
        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }

    public function search(Request $request)
    {
        $articles = Article::where('title', 'LIKE', '%' . $request->input('q') . '%')->paginate(10);
        return view('article.search_result')->withArticles($articles);
    }
}