@extends('layouts.app')

@section('content')



  
	@include('layouts.navbar')
	@if($flag=1)
  	<div class="row-sm-12  row-md-4 row-md-offset-8 resonsive" style="margin-left: 450px">
  		<p style="color: red">UTENTE NON TROVATO</p>
  	</div>
  	@endif
	@include('layouts.sidebar')
  @include('layouts.user_table')

  @endsection