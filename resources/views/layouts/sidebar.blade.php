<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active">

       		<li><a href="{{route('home')}}">HOME</a></li>
           	<li><a href="{{route('stat')}}">ANALYSIS</a></li>
           	<li><a href="{{route('user')}}">USER</a></li>

           	@if(($user->privilegi)==2)
           	<li><a href="{{route('authandle')}}">GESTIONE SENSORI</a></li>
           	@endif
          </ul>
    
        </div>