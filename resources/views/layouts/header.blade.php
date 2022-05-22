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
  
 <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <h2><a class="navbar-brand" href="#">CRUD APPLICATION</a></h2>
        <ul class="navbar-nav float-end">
          <li class="nav-item btn btn-outline-secondary btn-sm me-3 p-1">
            <a class="nav-link text-light" href="#">Login</a>
          </li>
          <li class="nav-item btn btn-outline-primary btn-sm p-1">
            <a class="nav-link text-light" href="#">Sign Up</a>
          </li>
        </ul>
    </div>
  </nav> -->

  <nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color:black;">
    <div class="container-fluid">
        <a class="navbar-brand text-light mr-auto" href="{{url('/home')}}">Crud Application</a>
        <div>
            <ul class="navbar-nav">

                @if(Session::has('LoggedUser'))
                <li class="nav-item">
                  <a class="nav-link text-light" href="{{ route('home') }}">Profile: <strong class="text-warning">{{$daata->name}}</strong></a>
              </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="{{ route('signout') }}">Logout</a>
              </li>
                @else
                <li class="nav-item">
                  <a class="nav-link text-light" href="{{ route('login') }}">Login</a>
              </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="{{ route('register-user') }}">Register</a>
              </li>
                @endif
              

            </ul>
        </div>
    </div>
</nav>

