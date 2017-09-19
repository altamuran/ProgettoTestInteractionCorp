<div class="col-sm-9 col-sm-offset-3 col-md-8 col-md-offset-2 main">
          
          <h2 class="sub-header" style="margin-top: 50px">SITI</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Descrizione</th>
                  <th>User</th>
                  
                </tr>
              </thead>
                 @foreach ($Sito as $sito)
              <tbody>
                <tr>
                  <td>{{$sito->id}}</td>
                  <td>{{$sito->descrizione}}</td>
                  <td>{{$User->name}}</td>
                   <td><a href="{{route('sensorihandle',[$sito->id])}}"><button type="button" class="btn btn-primary btn-sm btn3d" id="button" >
                          Visualizza sensori
                        </button></a>
                        </td>
                        <td><a href="{{route('removesite',[$sito->id])}}">
                        <button type="submit" class="btn btn-danger btn-sm btn3d" >
                        Elimina sito
                        </button>
                      </td>
                      <td><a href="{{route('editsite',[$User->id,$sito->id])}}">
                        <button type="submit" class="btn btn-primary btn-sm btn3d" >
                        Edit sito
                        </button>
                      </td>
              @endforeach        
                  
                  
                </tr>
                </tbody>
            </table>
                  

          </div>
        </div>
      </div>

    </div>



