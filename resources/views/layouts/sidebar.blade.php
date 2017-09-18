<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active">

       		<li><a href="{{route('home')}}">HOME</a></li>
          @if((Auth::user()->privilegi)==2)

           	<li><a href="{{route('adduser')}}">GESTIONE RICHIESTE</a></li>
            <li><a href="{{route('userhandle')}}">GESTIONE UTENTI</a></li>
            <li><a href=""></a></li>
           	@endif
          </ul>
    
        </div>