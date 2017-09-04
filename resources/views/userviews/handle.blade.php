@extends('layouts.app')

@section('content')



  
	@include('layouts.navbar')

	@include('layouts.sidebar')
  @include('layouts.table')
        

    <div class="row col-md-8 col-md-offset-2" style="margin-top: 150px">
            <div class="col-xs-6 col-sm-3 col-md-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            
         </div>
    
  
</html>


@endsection