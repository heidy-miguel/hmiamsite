@extends('layouts.app')

@section('page-title')
UCI Neonatal
@endsection

@section('main')
	<div class="container service">
		<div class="row">
			<div class="col-lg-8 entry">
				<article class="entry entry-single">
	              <div class="entry-image">
	                <img src="{{ asset('img/uci_neonatal.jpg') }}" alt="" class="img-fluid">
	              </div>

	              <h2 class="entry-title">
	                <a href="#">UCI Neonatal</a>
	              </h2>

	              <div class="entry-content">
					<p>
					É o serviço completo que atende recém-nascidos de qualquer idade gestacional que precise de ventilação mecânica, recém-nascidos menores de 30 semanas (prematuros) ou menor que 1kg, que necessitem de cirúrgia de grande porte ou pós-operatório de cirurgias. O espaço conta com equipe e equipamentos especializados.</p>

					<p>O serviço de Neonatal, são serviços em unidades hospitalares destinados ao atendimento de recém-nascidos considerados de médio risco e que demandem assistência contínua, porém de menor complexidade.</p>
	              </div>
				</article>
			</div>
			<div class="col-lg-4"></div>
		</div>
	</div>
@endsection