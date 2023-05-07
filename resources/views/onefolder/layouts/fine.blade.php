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
  
  <body style="margin-left: 3rem;" >
  
  
  <!-- <main class="col-md-10 ms-sm-auto col-lg-60 px-md-90"> -->
  
  
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add fine</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      <form action="" method=>
        @csrf

        
  
    <div class="mb-3">
    <label for="exampleInputPublisher_Name" class="form-label">name </label>
    <input type="text" class="form-control" name="name" id="exampleInputPublisher_Name">
  </div>

  <div class="mb-3">
    <label for="exampleInputavailable" class="form-label">Student id</label>
    <input type="integer" class="form-control" name="code" id="exampleInputavailable">

  </div>

  <div class="mb-3">
    <label for="exampleInputPublisher_Name" class="form-label">Book name </label>
    <input type="text" class="form-control" name="name1" id="exampleInputPublisher_Name">
  </div>
    

    
  
  
  
 
 

  <div class="mb-3">
    <label for="exampleInputavailable" class="form-label">total</label>
    <input type="integer" class="form-control" name="total" id="exampleInputavailable">
    
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
<table class="table"id="myTable" width="">
  <thead>
    <tr>
    <th scope="col">#</th>
    
      <th scope="col">name</th>
      <th scope="col">student id </th>
      <th scope="col">Book Name</th>
      
      <th scope="col">total</th>
    


    
    </tr>
  </thead>
  <tbody>
    @foreach($fines  as $key=>$fine )
    <tr>
      <th>{{$key+1}}</th>
      <td>{{$fine->name}}</td>
      <td>{{$fine->code}}</td>
      <td>{{$fine->name1}}</td>
     
      <td>{{$fine->total}}</td>
      
      
    
     



    @endforeach

</tr>
   


  </tbody>
  
</table>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
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
<div class="" style="text-align: center;">
<a href="{{route('view')}}">Back home page</a>
</div><br>


@endsection
