@extends('layouts.app')

@section('content')



    	<h1 style="margin-left: 250PX">ADD SITE</h1>
	@include('layouts.navbar')
	@include('layouts.sidebar')

		<form class="form-horizontal" action= "{{ route('addnewsite') }}"  method="POST" enctype="multipart/form-data">
     {{ csrf_field() }}
  <fieldset>
    <div id="legend">
      <legend class="">Aggiungi sito</legend>
    </div>
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="name">Nome</label>
      <div class="controls">
        <input type="text" id="name" name="name" placeholder="" class="input-xlarge">
        <p class="help-block">inserisci il nome del sito da aggiungere</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="user">User</label>
      <div class="controls">
        <input type="number" id="user" name="user" placeholder="" class="input-xlarge">
        <p class="help-block">inserire l'user incaricato della gestione del sito</p>
      </div>
    </div>
 	<div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button type ="submit" class="btn btn-success">Aggiungi</button>
      </div>
    </div>
  </fieldset>
</form>
	@endsection