@extends('layouts.app')

@section('page-title')
Imagiologia
@endsection

@section('main')
	<div class="container service">
		<div class="row">
			<div class="col-lg-8 entry">
				<article class="entry entry-single">
	              <div class="entry-image">
	                <img src="{{ asset('img/tac_hospital_capricornio.jpg') }}" alt="" class="img-fluid">
	              </div>

	              <h2 class="entry-title">
	                <a href="#">Imagiologia</a>
	              </h2>

	              <div class="entry-content">
					<p>
					A Imagiologia é a especialidade médica que permite a obtenção de imagens de diversos órgãos e sistemas, utilizando diferentes metodologias como as radiações, ultrassons ou ondas de radiofrequência, para fins de diagnóstico e terapêutica. Presta apoio a quase todas as outras especialidades médicas e cirúrgicas, facilitando o diagnóstico e a localização de inúmeras lesões e permitindo monitorizar os resultados do tratamento.
					</p>
					<p>
					Os Hospitais e Clínicas CUF dispõem de serviços de Imagiologia equipados com todas as valências atuais da Imagiologia Clínica.</p>
	              </div>
				</article>
			</div>
			<div class="col-lg-4"></div>
		</div>
	</div>
@endsection