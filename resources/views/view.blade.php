@extends('layouts.main')

@section('main-content')

  <body class="bg-light">
    <div class="container mt-5" >
      <h2 class="text-center mb-5">View!<a href="{{ route('home') }}"><button class="btn btn-success float-end" >Add New</button></a></h2>
        
        <form action="" class="mb-4">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <input type="search" class="form-control" placeholder="Search" name="search" value="{{$search}}">
          <button class="btn btn-primary me-md-2" type="submit" for="search">Search</button>
          <a href="{{url('view')}}">
          <button class="btn btn-danger" type="button">Reset</button></a>
        </div>
        </form>

        <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">#id</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone No.</th>
                <th scope="col">Comment</th>
                <th scope="col">Gender</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
              @php
              $i=1;    
              @endphp
              @foreach ($customer as $data)
              <tr>
                <td>{{$i++}}</td>
                <th scope="row">{{$data->customer_id}}</th>
                <td>{{$data->firstname}}</td>
                <td>{{$data->lastname}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->phoneno}}</td>
                <td>{{$data->comments}}</td>
                <td>{{$data->gender}}</td>
                <td class="text-center"><a href="{{url('/view/edit')}}/{{$data->customer_id}}"><button class="btn btn-primary btn-sm">Edit</button></a></td>
                <td class="text-center"><a href="{{url('/view/delete')}}/{{$data->customer_id}}"><button class="btn btn-danger btn-sm">Delete</button></a></td>
              </tr>
              @endforeach  
            </tbody>
          </table>
          <div class="d-flex justify-content-center">
            <div>
            {{$customer->links('pagination::bootstrap-4')}}
            </div>
          </div>
    </div> 


@endsection





  