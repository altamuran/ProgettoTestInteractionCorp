<div class="col-sm-4 col-md-9 col-md-offset-0 main">
          

          <h2 class="sub-header" style="margin-top: 50px">RILEVAZIONI</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Valore</th>
                  <th>Messaggio</th>
                  <th>Data</th>
                </tr>
              </thead>

              @foreach ($detections as $d)
    

              <tbody>
                <tr>
                  <td>{{$d->id}}</td>
                  <td>{{$d->valore}}</td>
                  <td>{{$d->messaggio}}</td>
                  <td>{{$d->data_ril}}</td>
                 
            </tr>
               
             @endforeach 
                    
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>