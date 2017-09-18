<div class="col-sm-5 col-sm-offset-3 col-md-9 col-md-offset-0 main">
          

          

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
                  <td>{{$S->tipo}}</td>
                  <td>{{$S->marca}}</td>
                  <td>{{$S->ambiente}}</td>
                  <td>
                  <a href="{{route('g_detection',[$S->id])}}">
                   <button type="button" class="btn btn-primary btn-sm btn3d" id="button" >
                          Visualizza rilevazioni
                    </button>
                    </a>
                  </td>
              </tr>
               
              @endforeach               
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>