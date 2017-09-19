@extends('layouts.app')

@section('content')



    	<h1 style="margin-left: 250PX">ADD SITE</h1>
	@include('layouts.navbar')
	@include('layouts.sidebar')

		<form class="form-horizontal" action= "{{ route('edit_s') }}"  method="POST" enctype="multipart/form-data">
     {{ csrf_field() }}
  <fieldset>
    <div id="legend">
      <legend class="">Modifica sito</legend>
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
      <label class="control-label" for="sito">Sito</label>
      <div class="controls">

        <select name="sito">
        <option value="{{$site}}">{{$site}}</option>
      </select>
    <br><br>
        <p class="help-block">inserire il sito nel quale integrare il sensore</p>
      </div>
    </div>
 
     <div class="control-group">
      
      <label class="control-label" for="user">User</label>
      <div class="controls">

        <select name="user">
        <option value="{{$user_id}}">{{$user_id}}</option>
        </select>
        <br><br>
      <p class="help-block">inserire utente</p>
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
