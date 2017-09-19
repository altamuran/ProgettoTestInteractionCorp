@extends('layouts.app')

@section('content')


	
  
	@include('layouts.navbar')

	@include('layouts.sidebar')
	
	@include('guestlayouts.guest_table_detection')
     <div class="col-md-8 col-sm-8 " style="margin-left: 150px"><a href="{{route('download')}}"> 
	<button class="btn btn-lg btn-primary btn-block" type="submit">Download rilevazioni</button>            
	</a></div>

@endsection