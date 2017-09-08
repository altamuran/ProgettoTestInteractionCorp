@extends('layouts.app')

@section('content')



    	<h1 style="margin-left: 250PX">ADD SENSORE</h1>
	@include('layouts.navbar')
	@include('layouts.sidebar')

		<form class="form-horizontal" action= "{{ route('addnewsensore') }}"  method="POST" enctype="multipart/form-data">
     {{ csrf_field() }}
  <fieldset>
    <div id="legend">
      <legend class="">Aggiungi sensore</legend>
    </div>
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="codice">Codice</label>
      <div class="controls">
        <input type="text" id="codice" name="codice" placeholder="" class="input-xlarge">
        <p class="help-block">inserisci il codice sensore</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="user">Marca</label>
      <div class="controls">
        <input type="text" id="marca" name="marca" placeholder="" class="input-xlarge">
        <p class="help-block">inserire la marca del sensore</p>
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
      <!-- Button -->
      <div class="controls">
        <button type ="submit" class="btn btn-success">Aggiungi</button>
      </div>
    </div>
  </fieldset>
</form>

	@endsection
