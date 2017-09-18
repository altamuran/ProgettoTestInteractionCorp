<div class="col-sm-9 col-sm-offset-3 col-md-9 col-md-offset-1 main">
          

          

          <h2 class="sub-header" style="margin-top: 50px">USERS</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>email</th>
                  <th>privilegi</th>
                  <th>Siti</th>
                  
                </tr>
              </thead>
              @foreach ($all_user as $U)
    

              <tbody>
                <tr>
                  <td>{{$U->id}}</td>
                  <td>{{$U->name}}</td>
                  <td>{{$U->email}}</td>
                  <td>{{$U->privilegi}}</td>

                  <td><a href="{{route('sitehandle',[$U->id])}}"><button type="button" class="btn btn-primary btn-sm btn3d">
                          visualizza siti
                        </button></a></td>
                

              
                  
                </tr>
               
      @endforeach               
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>