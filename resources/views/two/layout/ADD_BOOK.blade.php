@extends('two.layout.backend1')
@section('content')


 <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
   New Book
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
    <label for="exampleInputBook_Name" class="form-label">Book Category</label>
    <input type="text" class="form-control" name="name" id="exampleInputBook_Name">

    
    
  </div>
  <div class="mb-3">
    <label for="exampleInputWriter_Name" class="form-label">Writer_Name</label>
    <input type="text" class="form-control" name="Writer_Name" id="exampleInputWriter_Name">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPublisher_Name" class="form-label">Department_Name </label>
    <input type="text" class="form-control" name="Department_Name" id="exampleInputPublisher_Name">
  </div>

  <div class="mb-3">
    <label for="exampleInputavailable" class="form-label">Available</label>
    <input type="integer" class="form-control" name="Available" id="exampleInputavailable">
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
      <th scope="col">Book Category</th>
      <th scope="col">Writer_Name</th>
      <th scope="col">Publisher_Name</th>
      <th scope="col">Available</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($layouts as $key=>$layout)
    <tr>
      <th>{{$key+1}}</th>
      <td>{{$layout->name}}</td>
      <td>{{$layout->Writer_Name}}</td>
      <td>{{$layout->Department_Name}}</td>
      <td>{{$layout->Available}}</td>
      
      <td>
        <a class="btn-btn-primary" href="{{route('book_edit',$layout->id)}}" role="buttton">Edit</a>
        <!-- <a class="btn-btn-danger" href="{{route('ADD_BOOKdelete',$layout->id)}}" role="buttton">Delete</a> -->
      </td>

    </tr>
    @endforeach
  </tbody>
  
</table>

 @endsection
