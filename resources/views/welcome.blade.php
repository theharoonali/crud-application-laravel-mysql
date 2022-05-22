@extends('layouts.main')

@section('main-content')
  <body class="bg-light ">
    <div class="container mt-5" >

      <h2 class="text-center mb-5">{{$title}}<a href="{{url('/view')}}">@if(Session::has('LoggedUser'))<button class="btn btn-dark float-end" >View</button>@endif</a></h2>

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

  @endsection