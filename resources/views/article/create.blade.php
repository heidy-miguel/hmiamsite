@extends('layouts.app')

@push('css')
@endpush

@section('page-title')
Novo Artigo
@endsection

@section('main')
<div class="container">
	<div class="row justify-content-md-center">
		<div class="col-md-8 pt-5">
          <div class="card  mt-5">
            <div class="card-body">
             <div class="section-title">
                <h1>Nova Publicação</h1>
              </div> 
              <form class="row g-3" method="post" action="{{ route('articles.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="col-12">
                  <label for="title" class="form-label">Título</label>
                  <input type="text" name="title" value="{{ old('title') }}" class="form-control">
                  @if($errors->has('title'))
                    <span class="error">
                      {{ $errors->first('title') }}
                    </span>
                  @endif
                </div>

                <div class="col-12">
                  <label for="picturee" class="form-label">Imagem</label>
                  <input type="file" name="picture" value="{{ old('picture') }}" class="form-control" required="required">
                  @if($errors->has('picture'))
                    <span class="error">
                      {{ $errors->first('picture') }}
                    </span>
                  @endif
                </div>

                <div class="col-12">
                  <label for="body" class="form-label">Texto</label>
                  <textarea class="tinymce-editor" name="body">{{ old('body') }}</textarea>
                  @if($errors->has('body'))
                    <span class="error">
                      {{ $errors->first('body') }}
                    </span>
                  @endif
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
              </form>
            </div>
          </div>
		</div>
	</div>
</div>
@endsection
@push('js')
<script src="{{ asset('vendor/jquery/jquery.min.3.6.js') }}"></script>
<script src="{{ asset('vendor/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
@endpush