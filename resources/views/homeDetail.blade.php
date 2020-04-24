
@extends('layout.layoutBase')

@section('title', $book["titolo"] )

@section('content')
	
	@if($id>0)

		<h2>Dettagli del libro</h2>
		<p>
			<strong>Titolo: </strong> {{ $book["titolo"] }} <br>
			<strong>Autore: </strong> {{ $book["autore"] }} <br>
			<strong>Genere: </strong> {{ $book["genere"] }} <br>
		</p>

	@else

		Questa pagina non esiste o il libro cercato non è più in elenco...

	@endif

@endsection
