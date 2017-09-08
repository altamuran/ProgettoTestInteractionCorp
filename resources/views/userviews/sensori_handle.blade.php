@extends('layouts.app')

@section('content')



  
	@include('layouts.navbar')

	@include('layouts.sidebar')
	
	@include('layouts.table_sensori')
    
    <div class="row col-md-8 col-md-offset-4 "  >

	        <a href="{{ route('addsensore',$site_id)}}">
	       	<button type="button" class="btn btn-primary btn-lg btn3d">Aggiungi sensore</button>
	        </div>
	        </a>
@endsection