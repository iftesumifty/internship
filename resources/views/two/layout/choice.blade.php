@include('two.layout.another')
 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    <title>Bootstrap demo</title>
    
  </head> 
  
  <body >
  
  
  <main class="col-md-10 ms-sm-auto col-lg-60 px-md-90">
  
  <div style="margin-left: 2rem; margin-top:7 rem;" > 
  <button type="button" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Add choice
</button>

   <!-- Modal  -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel"></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div> 
      <div class="modal-body">
      
      <form action="{{route('choicecat')}}"method="post" enctype="multipart/form-data">
        @csrf
  
  <div class="mb-3">
    <label for="exampleInputBook_Name" class="form-label">book_name</label>
    <input type="text" class="form-control" name="name" id="exampleInputBook_Name">

    
    
  </div>
  <div class="mb-3">
    <label for="exampleInputWriter_Name" class="form-label">writer_name</label>
    <input type="text" class="form-control" name="name1" id="exampleInputWriter_Name">
  </div>
  
  

  <div class="mb-3">



    <label for="exampleInputPublisher_Name" class="form-label">profile </label>
    <input type="file" class="form-control" name="image" id="exampleInputPublisher_Name">
  </div>

 
  <div class="mb-3">
    <label for="exampleInputPublisher_Name" class="form-label">price </label>
    <input type="integer" class="form-control" name="price1" id="exampleInputPublisher_Name">
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
      
      <th scope="col">book_name</th>
      <th scope="col">Writer_Name</th>
      <th scope="col">image</th>
     
      <th scope="col">price</th>
      
      <th scope="col">Action</th>
     
      
      
    </tr>
<tbody>
    @foreach($choice as $key=>$choice)
    <tr>
      <th>{{$key+1}}</th>
      <td>{{$choice->name}}</td>
      <td>{{$choice->name1}}</td>
      
      
      <td>
      
      <img src="{{asset('/uploads/profile/'.$choice->image)}}"  height="50" weight="50" />
      

      </td>
      <td>{{$choice->price1}}</td>
      
      <td>
 <a class="btn-btn-danger" href="{{route('choice1',$choice->id)}}" role="buttton">Delete</a> 
        
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

 

