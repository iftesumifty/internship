@extends('two.layout.backend1')
@section('content')


 <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Add Self
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add New self</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      <form action="{{route('cat_add')}}" method='post'>
        @csrf
  
  <div class="mb-3">
    <label for="exampleInputBook_Name" class="form-label">self_no</label>
    <input type="text" class="form-control" name="self_no" id="exampleInputBook_Name">


    
  </div>
  <div class="mb-3">
    <label for="exampleInputWriter_Name" class="form-label">Book_Title </label>
    <input type="text" class="form-control" name="Book_Title" id="exampleInputWriter_Name">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPublisher_Name" class="form-label">Writer_Name </label>
    <input type="text" class="form-control" name="Writer_Name" id="exampleInputPublisher_Name">
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
      <th scope="col">self_no</th>
      <th scope="col">Book_Title</th>
      <th scope="col">Writer_Name</th>
      
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($categories as $key=>$category)
    <tr>
      <th>{{$key+1}}</th>
      <td>{{$category->self_no}}</td>
      <td>{{$category->Book_Title}}</td>
      <td>{{$category->Writer_Name}}</td>

      <td>
        <a class="btn-btn-primary" href="{{route('edit_cat',$category->id)}}" role="buttton">Edit</a>
        <a class="btn-btn-danger" href="{{route('category_delete',$category->id)}}" role="buttton">Delete</a>
      </td>
      
      
     

    </tr>
    @endforeach


   
  </tbody>
  
</table>

 @endsection
