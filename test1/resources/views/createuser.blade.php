<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Validation in Laravel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
  <div class="container mt-5">
@if (session('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                    {{ session('success') }}
                </div>
            @endif
@if (session('failure'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>  
                    {{ session('failure') }}
                </div>
            @endif

  <h2>Create User</h2>
  <hr>
  <form method="post" action="{{route('add-user')}}" enctype="multipart/form-data">
    @csrf


    <div class="form-group">
    <label>First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Enter Your First Name">
    @if ($errors->has('firstname'))
                <div class="error">
                    {{ $errors->first('firstname') }}
                </div>
                @endif
              </div>


    <div class="form-group">
    <label>Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Enter Your Last Name">
       @if ($errors->has('lastname'))
                <div class="error">
                    {{ $errors->first('lastname') }}
                </div>
                @endif
              </div>

    <div class="form-group">
    <label>Email</label>
    <input type="text" id="email" name="email" placeholder="Enter Your Email">
       @if ($errors->has('email'))
                <div class="error">
                    {{ $errors->first('email') }}
                </div>
                @endif
              </div>

    <div class="form-group">
    <label>Contact Number</label>
    <input type="text" id="number" name="number" placeholder="Enter Your Contact Number">
       @if ($errors->has('number'))
                <div class="error">
                    {{ $errors->first('number') }}
                </div>
                @endif
              </div>
    
    <div class="form-group">
    <label>City</label>
    <input type="text" id="city" name="city" placeholder="Enter Your Current City">
       @if ($errors->has('city'))
                <div class="error">
                    {{ $errors->first('city') }}
                </div>
                @endif
              </div>


    <div class="form-group">            
    <label>Gender</label><br>
    <input id="add_fields_placeholder" style="display: inline-flex;" type="radio" name="gender" value="male"> Male
  <input id="add_fields_placeholder" style="display: inline-flex;" type="radio" name="gender" value="female"> Female
     @if ($errors->has('gender'))
                <div class="error">
                    {{ $errors->first('gender') }}
                </div>
                @endif
              </div>

    <div class="form-group">           
    <div id="add_fields_placeholderValue">
        Age:
        <input type="text" name="add_fields_placeholderValue" id="add_fields_placeholderValue">
     </div>
    </div>

  <div class="form-group">   
   <label>Profile Photo:</label>
   <input type="file" name="image">
      @if ($errors->has('image'))
                <div class="error">
                    {{ $errors->first('image') }}
                </div>
                @endif
              </div>

  <div class="form-group">
  <label>Status:</label>
    <input style="display: inline-flex;" type="radio" name="status" value="1"> Active
    <input style="display: inline-flex;" type="radio" name="status" value="0"> Inactive
       @if ($errors->has('status'))
                <div class="error">
                    {{ $errors->first('status') }}
                </div>
                @endif
  </div>

  
    <input type="submit" value="Submit" class="btn btn-dark btn-block">
  </form>
</div>

</body>
</html>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function()
                  {
                  $("#add_fields_placeholder").change(function()
        {
            if($(this).val() == "male")
        {
            $("#add_fields_placeholderValue").show();
        }
        else
        {
            $("#add_fields_placeholderValue").hide();
        }
            });
                      $("#add_fields_placeholderValue").hide();
});
</script>

