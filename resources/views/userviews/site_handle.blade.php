@extends('layouts.app')

@section('content')

   <h1>SITI UTENTE</h1>


  
	@include('layouts.navbar')

	@include('layouts.sidebar')
	@include('layouts.table_siti')

			<div class="row col-md-8 col-md-offset-4 "  >
	        <button type="button" class="btn btn-primary btn-lg btn3d">Aggiungi sito</button>
	        </div>
	@endsection