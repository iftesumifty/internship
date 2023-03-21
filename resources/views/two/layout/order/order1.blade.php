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
    <label for="exampleInputPublisher_Name" class="form-label">name </label>
    <input type="text" class="form-control" name="name" id="exampleInputPublisher_Name">
  </div>

  
  <div class="mb-3">
    <label for="exampleInputPublisher_Name" class="form-label">Book name </label>
    <input type="text" class="form-control" name="name1" id="exampleInputPublisher_Name">
  </div>
    

    
  
  <div class="mb-3">
    <label for="exampleInputWriter_Name" class="form-label">email</label>
    <input type="email" class="form-control" name="email" id="exampleInputWriter_Name">
  </div>
  
  
  <div class="mb-3">
    <label for="exampleInputavailable" class="form-label">phone</label>
    <input type="integer" class="form-control" name="phone" id="exampleInputavailable">

  </div>

  <div class="mb-3">
    <label for="exampleInputavailable" class="form-label">address</label>
    <input type="text" class="form-control" name="address" id="exampleInputavailable">
    
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
      <th scope="col">Book name</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">address </th>
      <th scope="col">total</th>
    


      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($orders  as $key=>$order )
    <tr>
      <th>{{$key+1}}</th>
      <td>{{$order->name}}</td>
      <td>{{$order->name1}}</td>
      <td>{{$order->email}}</td>
      <td>{{$order->phone}}</td>
      <td>{{$order->address}}</td>
      <td>{{$order->total}}</td>
      
      
    
      <td>
        
        <a class="btn-btn-danger" href="{{route('order_delete',$order->id)}}" role="buttton">Delete</a>
      </td>



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


