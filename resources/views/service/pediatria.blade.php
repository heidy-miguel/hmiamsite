@extends('layouts.app')

@section('page-title')
Pedriatria
@endsection

@section('main')
	<div class="container service">
		<div class="row">
			<div class="col-lg-8 entry">
				<article class="entry entry-single">
	              <div class="entry-image">
	                <img src="{{ asset('img/estetoscopio-de-pediatria.jpg') }}" alt="" class="img-fluid">
	              </div>

	              <h2 class="entry-title">
	                <a href="#">Pediatria</a>
	              </h2>

	              <div class="entry-content">
					<p>
					O objectivo do Serviço de Pediatria é prestar assistência em cuidados de saúde à população com menos de 18 anos nas suas mais variadas vertentes.
					</p>
					<p>
					O Serviço de Pediatria engloba o Internamento, situado no  piso 0 e a Consulta Externa</p>

					<p>Os espaços físicos procuram satisfazer ao máximo as necessidades específicas das crianças/adolescentes e estão decorados com temas alusivos à infância.</p>
					<p>O Serviço de Pediatria dispõe do Atendimento Pediátrico Referenciado que consiste na possibilidade de atender as crianças perante situações clínicas não emergentes.</p>
	              </div>
				</article>
			</div>
			<div class="col-lg-4"></div>
		</div>
	</div>
@endsection