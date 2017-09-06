<div class="col-sm-9 col-sm-offset-3 col-md-9 col-md-offset-1 main">
          <h2>Dashboard</2>

          

          <h2 class="sub-header" style="margin-top: 50px">NOT ACCEPTED USERS</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>email</th>
                  <th>privilegi</th>
                  <th>accept</th>
                  
                </tr>
              </thead>
              @foreach ($all_user as $U)
    

              <tbody>
                <tr>
                  <td>{{$U->id}}</td>
                  <td>{{$U->name}}</td>
                  <td>{{$U->email}}</td>
                  <td>{{$U->privilegi}}</td>
                  <td>{{$U->accept}}</td>
  
                  <td><a href="{{ route('accept', [$U->id]) }}" method="post"><button type="button" class="btn btn-primary btn-sm btn3d">
                                     Accetta
                        </button></a></td>

      

              
                  
                </tr>
               
      @endforeach               
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>