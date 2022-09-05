@extends('layouts.app')

@section('page-title')
Publicações
@endsection

@section('main')
	<div class="container service">
		<div class="row mb-5">
			<div class="col-lg-8 entry">
				@foreach($articles as $article)
				<article class="entry">
<!-- 	              <div class="entry-image">
	                <img src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}" class="img-fluid">
	              </div> -->

	              <h2 class="entry-title">
	                <a href="{{ route('articles.show', [$article->slug]) }}">{{ ucfirst(mb_strtolower($article->title)) }}</a>
	              </h2>

	              <div class="entry-content">
					{!! Str::limit($article->body, 250, '...') !!}
					<a href="{{ route('articles.show', [$article->slug]) }}">Ler Mais</a>						
	              </div>
				</article>
				@endforeach
			</div>
			<div class="col-lg-4"></div>
		</div>
	</div>
@endsection