<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>





            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="">InteractionCorp</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">

          @if (Route::has('login'))
          @auth
                        <li><a href="{{ url('/home') }}">rotta utente autenticato</a></li>
                        <li><a href="#">{{$user->name}}</a></li>
                    @else
                    @endauth
                    @endif
 																		


			          


            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#"></a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right col-md-2">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>