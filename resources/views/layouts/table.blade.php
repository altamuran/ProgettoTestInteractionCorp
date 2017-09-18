<div class="col-sm-9 col-sm-offset-3 col-md-8 col-md-offset-2 main">
          

          

          <h2 class="sub-header" style="margin-top: 50px">SENSORI</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Identifictore</th>
                  <th>Codice</th>
                  <th>Info</th>
                  <th>Sito</th>
                  <th>User</th>
                </tr>
              </thead>
              @foreach ($Sens as $S)
    

              <tbody>
                <tr>
                  <td>{{$S->id}}</td>
                  <td>{{$S->identificatore}}</td>
                  <td>{{$S->codice}}</td>
                  <td>{{$S->info}}</td>
                  <td><a href="{{route('sito', [$S->ambiente])}}">{{$S->ambiente}}</a></td>
                  
                  <td>{{$S->user}}</td>
                  
                </tr>
               
      @endforeach               
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>