<div class="col-sm-4 col-md-8 col-md-offset-2 main">
          <h2>Dashboard</2>

          

          <h2 class="sub-header" style="margin-top: 50px">SENSORI</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Tipo</th>
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
                  <td><a href="{{route('removesensore',[$S->id])}}">
                        <button type="submit" class="btn btn-danger btn-sm btn3d" >
                        Elimina sensore
                        </button>
                        </a>
                  </td>
                  <td><a href="{{route('editsensore',[$S->id,$S->ambiente])}}">
                        <button type="submit" class="btn btn-primary btn-sm btn3d" >
                        Modifica sensore
                        </button>
                        </a>
                  </td>

                  <td><a href="{{route('detection',[$S->id])}}">
                        <button type="submit" class="btn btn-primary btn-sm btn3d" >
                        Visualizza rilevazione
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