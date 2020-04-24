
@extends('layout.layoutBase')

@section('title', 'Home Page di prova')

@section('content')

	@if( !@empty($books) )

		@foreach($books    as $key => $value)
			<h2>{{ $value }}</h2>
			<p>
				<a href="{{ route('bookDetail', [ 'id' => $key ]) }}">Vedi dettaglio</a>
				
			</p>
		@endforeach

	@else

		<h2>Elenco vuoto</h2>
		<p>Nessun libro ancora archiviato nel sistema.</p>

	@endif

@endsection
