@extends('layouts.app')

@section('meta')
<meta property="og:url" content="http://www.gpshuambo.ao/articles/{{ $article->slug }}" />
<meta property="og:type"  content="article" />
<meta property="og:title"  content="{{ ucfirst(mb_strtolower($article->title)) }}" />
<meta property="og:description" content="{!! $article->body !!}" />
<meta property="og:image"  content="{{ Storage::url($article->image) }}" />
<meta property="og:locale" content="pt_PT">
@endsection

@section('page-title')
{{ ucfirst(mb_strtolower($article->title)) }}
@endsection

@section('main')
	<div class="container service">
		<div class="row">
			<div class="col-lg-8 entry">
				<article class="entry entry-single">
	              <div class="entry-image">
	                <img src="{{ Storage::url($article->picture) }}" alt="{{ $article->title }}" class="img-fluid">
	              </div>

				  <h2 class="entry-title">
	                <a href="#">{{ ucfirst(mb_strtolower($article->title)) }}</a>
	              </h2>
				  
				  <div class="entry-meta">
					<ul class="detail">
						<li> <i class="bi bi-clock"></i> {{ date('d.m\.Y', strtotime($article->created_at)) }}</li>
						@auth
							<li> <a href="{{ route('articles.edit', [$article->slug]) }}"><i class="bi bi-pencil-square"></i></a></li>
						@endauth
						<li> <i class="bi bi-clock"></i></li>
					</ul>
				  </div>

	              <div class="entry-content">
					{!! $article->body !!}
	              </div>
				</article>
			</div>
			<div class="col-lg-4"></div>
		</div>
	</div>
@endsection