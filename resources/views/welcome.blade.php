<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Crud</title>
    <link rel="icon" href="/images/forms.png">
  </head>
  <body class="bg-light ">
    <div class="container mt-5" >

      <h2 class="text-center mb-5">{{$title}}<a href="{{url('/view')}}"><button class="btn btn-dark float-end" >View</button></a></h2>

     <form action="{{$url}}" method="POST">
      @csrf
     <div class="row">
      <div class="col-md-6">
        <label for="FirstName" class="form-label">First Name</label>
        <input class="form-control mb-3 rounded" name="FirstName" type="text" value="{{$obj[0]}}">
      </div>
      <div class="col-md-6">
        <label for="LastName" class="form-label">Last Name</label>
        <input class="form-control mb-3 rounded" name="LastName" type="text" value="{{$obj[1]}}">
      </div>
     </div>

      <div class="row">
       <div class="col-md-9">
        <label for="Email" class="form-label">Email</label>
        <!-- Laravel Missing Field Hadndling -->
        <span class="text-danger">
          @error('Email')
              {{$message}}
          @enderror
        </span>
        <input class="form-control mb-3 rounded" placeholder="name@example.com" name="Email" type="email" value="{{$obj[2]}}">
        </div>
      <div class="col-md-3">
        <label for="PhoneNo" class="form-label">Phone Number (+92)</label>
        <input class="form-control mb-3 rounded " name="PhoneNo" type="tel" placeholder="3001234567" pattern="[0-9]{10}" value="{{$obj[3]}}">
       </div>
     </div>


       <div class="row">
        <div class="col-md-12">
          <label for="Comment" class="form-label">Comment</label>
          <textarea type="text" name="Comments" rows="3" class="form-control mb-3 rounded">{{$obj[4]}}</textarea>
        </div>
        </div>

       <div class="row">
        <div class="col-md-3 mb-3">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="Gender" id="" value="Male" {{($obj[5]=="Male")? 'checked' : ''}}>  
            <label class="form-check-label" for="Male">Male</label>
          </div>
          <div class="form-check form-check-inline">            
            <input class="form-check-input" type="radio" name="Gender" id="" value="Female" {{$obj[5]=="Female" ? 'checked' : ''}}>
            <label class="form-check-label" for="Female">Female</label>
          </div> 
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="Gender" id="" value="Other" {{$obj[5]=="Other" ? 'checked' : ''}}>
            <label class="form-check-label" for="Other">Other</label>
          </div>
        </div>
       </div>


      <div class="row">
      <div class="col-md-12">
      <button class="btn btn-primary" type="submit">Submit</button></div>
     </div>

    
    </form>
    </div> 







    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>