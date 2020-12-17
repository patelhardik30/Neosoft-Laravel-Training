<link rel="stylesheet"type="text/css" href="{{ asset('css/adminlte.min.css') }}">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<!-- Custom CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/style1.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="row">
  <div class="col-sm-4 col-md-8 col-lg-12">
     
    <div align="center" class="card-body">
      <main>
                <div class="table-wrapper" tabindex="0">
                <table>
                  <thead>
                  <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email Address</th>
                    <th>Contact Number</th>
                    <th>City</th>
                    <th>Gender</th>
                    <th>Photo</th>
                    <th>Status</th> 
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    @foreach($user as $cat)
                    <td>{{$cat->first_name}}</td>
                     <td>{{$cat->last_name}}</td>
                    <td>{{$cat->email}}</td>
                    <td>{{$cat->contact_no}}</td>
                    <td>{{$cat->city}}</td>
                    <td>{{$cat->gender}}</td>
                      <td><img src="img/{{$cat->photo}}" style="width: 100px"></td>
                     @if($cat->status == '1')
                    <td style="color: rgb(94, 240, 94);">Active</td> 
                    @else
                    <td style="color: rgb(233, 78, 78);">Inactive</td>
                    @endif

                    <td><button  style="margin: 5px;display: inline-flex;" class="btn-warning btn"> <a href="{{route('edit-user',$cat->id)}}" class="text-white"><i class="fa fa-pencil"></i> </a>  </button> 
                     <button style=" margin:5px; display: inline-flex;"  class=" btn-danger btn"><a href="{{route('delete-user',$cat->id)}}"> <i class="fa fa-ban" style="color: white;" aria-hidden="true"></i> </a> </button> 
 
                        </td>
                  </tr>
                  @endforeach
                  </tbody>
                 
                </table>
                </div><br>
                <a style=" float: right; margin: 10px;" href="{{route('create-user')}}" class="btn btn-primary btn-lg" role="button">Create User</a>
              <br><br><br><p> The above Data displayed are filled by the users. And can be changed or deleted using the options available.</p>
              </div>
            </main>
  </div>
</div>
</div>