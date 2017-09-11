<div class="col-sm-5 col-sm-offset-3 col-md-8 col-md-offset-2 main">
          <h2>Dashboard</2>

          

          <h2 class="sub-header" style="margin-top: 50px">SENSORI</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Codice</th>
                  <th>Marca</th>
                  <th>Sito</th>
                </tr>
              </thead>
              @foreach ($Sensori as $S)
              <tbody>
                <tr>
                  <td>{{$S->id}}</td>
                  <td>{{$S->codice}}</td>
                  <td>{{$S->marca}}</td>
                  <td>{{$S->ambiente}}</td>
              </tr>
               
              @endforeach               
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>