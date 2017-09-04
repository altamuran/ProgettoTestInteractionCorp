<div class="col-sm-9 col-sm-offset-3 col-md-8 col-md-offset-1 main">
          <h2>Dashboard</2>

          

          <h2 class="sub-header" style="margin-top: 50px">USERS</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>email</th>
                  <th>password</th>
                  <th>privilegi</th>
                  
                </tr>
              </thead>
              @foreach ($all_user as $U)
    

              <tbody>
                <tr>
                  <td>{{$U->id}}</td>
                  <td>{{$U->name}}</td>
                  <td>{{$U->email}}</td>
                  <td>{{$U->password}}</td>
                  <td>{{$U->privilegi}}</td>
                  <td>altro</td>
              
                  
                </tr>
               
      @endforeach               
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>