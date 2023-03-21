
@extends('two.layout.backend1')
@section('content')


 <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Add student
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add New Book</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      <form action="{{route('another')}}" method='post'>
        @csrf
  
        <div class="mb-3">
    <label for="exampleInputname" class="form-label">name</label>
    <input type="text" class="form-control"name='name' id="exampleInputEmail1"  placeholder="enter your name">
   
  </div>
  
  <div class="mb-3">
    <label for="exampleInputemail" class="form-label">email</label>
    <input type="email" class="form-control" name='email'id="exampleInputPassword1"placeholder="enter email">
</div>

  
  
  <div class="mb-3">
    <label for="exampleInputphone" class="form-label">phone</label>
    <input type="text" class="form-control"name='phone' id="exampleInputPassword1"placeholder="enter phone">
  </div>

  <div class="mb-3">
    <label for="exampleInputaddress" class="form-label">address</label>
    <input type="text" class="form-control"name='address' id="exampleInputPassword1"placeholder="address value">
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">ADD</button>
      </div>
      </form>
    </div>
  </div>
</div>

<hr>
<table class="table" width="">
  <thead>
    <tr>
    <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($users as $key => $user)
    

    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->phone}}</td>
      <td>{{$user->address}}</td>
      <td>

        <a class="btn-btn-primary" href="{{route('student_edit',$user->id)}}" role="buttton">Edit</a>
        <a class="btn-btn-danger" href="{{route('user_delete',$user->id)}}" role="buttton">Delete</a>
      </td>

    </tr>
    @endforeach
  </tbody>
  
</table>

 @endsection
