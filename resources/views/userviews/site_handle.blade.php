@extends('layouts.app')

@section('content')

   


  
	@include('layouts.navbar')
	@include('layouts.sidebar')
	@include('layouts.table_siti')

			<div class="row col-md-8 col-md-offset-4 "  >
	        <a href="{{route('addsite')}}">
	       	<button type="button" class="btn btn-primary btn-lg btn3d">   Aggiungi sito</button>
	        </div></a>
	@endsection