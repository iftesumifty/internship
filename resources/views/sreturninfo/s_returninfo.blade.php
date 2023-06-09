@extends('onefolder.master')
@section('content')<br><br><br><br>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    <title>Bootstrap demo</title>
    
  </head>
  
  <body>
  <main  style="margin-left: 02rem;">

 <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add New Book</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      <form action="{{route('re1')}}" method='post' enctype="multipart/form-data">
        @csrf
  
  

  <div class="mb-3">
    <label for="exampleInputBook_Name" class="form-label">student_id</label>
    <input type="integer" class="form-control" name="student_id" id="exampleInputBook_Name">

    
    
  </div>
  <div class="mb-3">
    <label for="exampleInputWriter_Name" class="form-label">Writer_Name</label>
    <input type="text" class="form-control" name="Writer_Name" id="exampleInputWriter_Name">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPublisher_Name" class="form-label">Book_Name </label>
    <input type="text" class="form-control" name="Book_Name" id="exampleInputPublisher_Name">
  </div>

  <div class="mb-3">



    <label for="exampleInputPublisher_Name" class="form-label">profile </label>
    <input type="file" class="form-control" name="image" id="exampleInputPublisher_Name">
  </div>

  <div class="mb-3">
    <label for="exampleInputavailable" class="form-label">pages</label>
    <input type="integer" class="form-control" name="pages" id="exampleInputavailable">
  </div>

  <div class="mb-3">
    <label for="exampleInputavailable" class="form-label">Delivery</label>
    <input type="text" class="form-control" name="Delivery" id="exampleInputavailable">
  </div>

  <div class="mb-3">
    <label for="exampleInputBook_Name" class="form-label">Return</label>
    <input type="text" class="form-control" name="Return" id="exampleInputBook_Name">

    
    
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
     
      <th scope="col">student_id</th>
      <th scope="col">Writer_Name</th>
      <th scope="col">Book_Name</th>
      <th scope="col">image</th>
      
      <th scope="col">pages</th>
      <th scope="col">Delivery</th>
      <th scope="col">Return</th>
      

      
    </tr>
  </thead>
  <tbody>
  @foreach($re1s as $key=>$re1)
    <tr>
      <th>{{$key+1}}</th>
      
      <td>{{$re1->student_id}}</td>
      <td>{{$re1->Writer_Name}}</td>
      <td>{{$re1->Book_Name}}</td>

      <td>
      
        <img src="{{asset('/uploads/profile/'.$re1->image)}}"  height="50" weight="50" />
        

        </td>

      <td>{{$re1->pages}}</td>
      <td>{{$re1->Delivery}}</td>
      <td>{{$re1->Return}}</td>

      
      

    </tr>
    @endforeach
    </tbody>
  </thead>
</table>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
  <script>

$(document).ready( function () {
    $('#myTable').DataTable();
} );
  </script>
   </main>
  </body>
  
</html>

<div class="" style="text-align: center;">
<a href="{{route('view')}}">Back home page</a>
</div><br>



@endsection
