@extends('two.layout.backend1')


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    <title>Bootstrap demo</title>
    
  </head> 
  
  <body  style="margin-left: 3rem; margin: top 20%;">
  
   <!-- <main class="col-md-10 ms-sm-auto col-lg-60 px-md-90">   -->
 <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="margin-top: 2rem;">
  Add sub Self
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add New prodect</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      <form action="{{route('product1_add')}}" method='post'>
        @csrf
  
  <div class="mb-3">
    <label for="exampleInputBook_Name" class="form-label">self_no</label>
    
<select name="self_no" class="form-control" id="exampleInputPublisher_Name">
<option>

choose self no...
</option>
@foreach($categories as $category)
<option value="{{$category->id}}">{{$category->self_no}}


</option>
@endforeach
</select>
  </div>

  <div class="mb-3">
    <label for="exampleInputBook_Name" class="form-label">Book_Title</label>
    
<select name="Book_Title" class="form-control" id="exampleInputPublisher_Name">
<option>

choose Book_Title
</option>
@foreach($subcategories as $subcategory)
<option value="{{$subcategory->id}}">{{$subcategory->Book_Title}}


</option>
@endforeach
</select>
  </div>

  <div class="mb-3">
    <label for="exampleInputWriter_Name" class="form-label">Course_Name </label>
    <input type="text" class="form-control" name="Course_Name" id="exampleInputWriter_Name">
  </div>

  <div class="mb-3">
    <label for="exampleInputWriter_Name" class="form-label">Edition </label>
    <input type="text" class="form-control" name="Edition" id="exampleInputWriter_Name">
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
<table class="table" id="myTable" width="">
  <thead>
    <tr>
    <th scope="col">#</th>
      <th scope="col">self_no</th>
      <th scope="col">Book_Title</th>
      <th scope="col">Course_Name</th>
      
      <th scope="col">Writer_Name</th>
      <th scope="col">Edition</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  
  
  @foreach($product1s as $key=> $ifty)
    <tr>
      <th>{{$key+1}}</th>
      
      <td>{{$ifty->category->self_no}}</td>
      <td>{{$ifty->subcategory->Book_Title}}</td>
      <td>{{$ifty->Course_Name}}</td>
      
      <td>{{$ifty->Writer_Name}}</td>
      <td>{{$ifty->Edition}}</td>
      <td>
      <a class="btn-btn-danger" href="{{route('pro_delete', $ifty->id)}}" role="buttton">Delete</a> 
      </td>     
    </tr>
    @endforeach

   
    </tbody>
  </thead>
</table>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script><br><br>
  <script src="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
  <script>

$(document).ready( function () {
    $('#myTable').DataTable();
} );
  </script>
   </main>
   </div>
  </body>
  
 </html> 


 
