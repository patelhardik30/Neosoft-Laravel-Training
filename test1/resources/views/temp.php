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

  <form method="post" action="{{route('add-user')}}">
    @csrf
    
   <div class="form-group">
       <label>Name</label>
          <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="fname" placeholder="Your name..">
  
          <!-- Error -->
            @if ($errors->has('name'))
            <div class="error">
                {{ $errors->first('name') }}
            </div>
         @endif
    </div>


    

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
       @if ($errors->has('lastname'))
                <div class="error">
                    {{ $errors->first('lastname') }}
                </div>
                @endif


    <label for="lname">Email</label>
    <input type="text" id="lname" name="email" placeholder="Your last name..">
       @if ($errors->has('email'))
                <div class="error">
                    {{ $errors->first('email') }}
                </div>
                @endif
 <label for="lname">Password</label><br>
    <input type="password" id="lname" name="password" placeholder="Your last name.."><br>
       @if ($errors->has('password'))
                <div class="error">
                    {{ $errors->first('password') }}
                </div>
                @endif

    <label for="lname">Contact Number</label>
    <input type="text" id="lname" name="number" placeholder="Your last name..">
       @if ($errors->has('number'))
                <div class="error">
                    {{ $errors->first('number') }}
                </div>
                @endif

    <label for="lname">City</label>
    <input type="text" id="lname" name="city" placeholder="Your last name..">
       @if ($errors->has('city'))
                <div class="error">
                    {{ $errors->first('city') }}
                </div>
                @endif

    <label for="add_fields_placeholder">Gender</label><br>
    <input id="add_fields_placeholder" style="display: inline-flex;" type="radio" name="gender" value="male"> Male
  <input id="add_fields_placeholder" style="display: inline-flex;" type="radio" name="gender" value="female"> Female
  <br><br>
     @if ($errors->has('gender'))
                <div class="error">
                    {{ $errors->first('gender') }}
                </div>
                @endif
    <div id="add_fields_placeholderValue">
        Age:
        <input type="text" name="add_fields_placeholderValue" id="add_fields_placeholderValue">
     </div>
   <label >Profile Photo:</label><br><br>
   <input type="file" name="image"><br><br>
      @if ($errors->has('image'))
                <div class="error">
                    {{ $errors->first('image') }}
                </div>
                @endif

  <label for="lname">Status:</label><br>
    <input style="display: inline-flex;" type="radio" name="status" value="1"> Active
    <input style="display: inline-flex;" type="radio" name="status" value="0"> Inactive
       @if ($errors->has('status'))
                <div class="error">
                    {{ $errors->first('status') }}
                </div>
                @endif

  
    <input type="submit" value="Submit">
  </form>
</div>
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

