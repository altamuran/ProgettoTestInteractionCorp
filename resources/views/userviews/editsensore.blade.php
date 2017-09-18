@extends('layouts.app')

@section('content')


	@include('layouts.navbar')
	@include('layouts.sidebar')

		<form class="form-horizontal" action= "{{ route('edit') }}"  method="POST" enctype="multipart/form-data">
     {{ csrf_field() }}
  <fieldset>
    <div id="legend">
      <legend class="">Modifica Sensore</legend>
    </div>
   <div class="control-group">
            <label for="codice" class="control-label"> 
              Tipo
            </label>
            <div class="controls">
              <select name="codice" id="codice">
                <option value="barometro">Barometro</option>
                <option value="termometro ">Termometro </option>
                <option value="igrometro">Igrometro</option>
                <option value="altimetro">Altimetro</option>
                <option value="pluviometro">Pluviometro</option>
                <option value="solarimetro">Solarimetro</option>
                <option value="accelerometro">Accelerometro</option>
          </select>
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
      <!-- E-mail -->
      <label class="control-label" for="sito">Id sensore</label>
      <div class="controls">

        <select name="id_sensore">
        <option value="{{$sensore_id}}">{{$sensore_id}}</option>
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
