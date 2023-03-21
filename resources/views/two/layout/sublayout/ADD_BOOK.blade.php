@extends('two.layout.backend1')
@section('content')


 <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
   Book category
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
      
      <form action="{{route('subanother')}}" method='post'>
        @csrf
        <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Book_Name</label></label>
    <input type="text" class="form-control" name="Book_Name" id="exampleInputPassword1">
  </div>

        <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Book Category</label>
    
     <select name="name"  id="exampleInputPassword1" class="form-control">

     <option>choose.....  </option>
    
    @foreach($layouts as $layout)
    <option value="{{$layout->id}}">{{$layout->name}}</option>
    @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Writer_Name</label>
    <input type="text" class="form-control" name="Writer_Name" id="exampleInputPassword1">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Publisher_Name </label>
    <input type="text" class="form-control" name="Department_Name" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Available</label>
    <input type="integer" class="form-control" name="Available" id="exampleInputPassword1">
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
      <th scope="col">Book_Name</th>
      <th scope="col">Book_Category</th>
      
      <th scope="col">Writer_Name</th>
      <th scope="col">Publisher_Name</th>
      <th scope="col">Available</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($sublayouts as $key=>$sublayout)
    <tr>
      <th>{{$key+1}}</th>
      <td>{{$sublayout->Book_Name}}</td>
      <td>{{$sublayout->layout->name}}</td>
      <td>{{$sublayout->Writer_Name}}</td>
      <td>{{$sublayout->Department_Name}}</td>
      <td>{{$sublayout->Available}}</td>
      <td>
      <a class="btn-btn-primary" href="{{route('book_edit1',$sublayout->id)}}" role="buttton">Edit</a>

       <!-- <a class="btn-btn-danger" href="{{route('user_list_delete',$sublayout->id)}}" role="buttton">Delete</a>  -->
      </td>

    </tr>
    @endforeach


    
  </tbody>
  
</table>

 @endsection
