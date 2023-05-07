@extends('two.layout.backend1')<br><br>


<main class="col-md-10 ms-sm-auto col-lg-60 px-md-90">
<form action="{{route('update_fine', $fine->id)}}" method='POST' >
  @csrf
 @method('PUT')
 <div class="mb-3">
    <label for="exampleInputPublisher_Name" class="form-label">name </label>
    <input type="text" class="form-control" name="name" id="exampleInputPublisher_Name" value="{{$fine->name}}" >
  </div>

  <div class="mb-3">
    <label for="exampleInputavailable" class="form-label">Student id</label>
    <input type="integer" class="form-control" name="code" id="exampleInputavailable" value="{{$fine->code}}"  >

  </div>

  <div class="mb-3">
    <label for="exampleInputPublisher_Name" class="form-label">Book name </label>
    <input type="text" class="form-control" name="name1" id="exampleInputPublisher_Name" value="{{$fine->name1}}"  >
  </div>
    
 

  <div class="mb-3">
    <label for="exampleInputavailable" class="form-label">total</label  >
    <input type="integer" class="form-control" name="total" id="exampleInputavailable" value="{{$fine->total}}"  >
    
  </div>

  

      </div>
      
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</main>
