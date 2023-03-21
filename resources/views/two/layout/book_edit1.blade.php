@extends('two.layout.backend1')
@section('content')

<main class="col-md-10 ms-sm-auto col-lg-60 px-md-90">
<form action="{{route('update_book1', $sublayout->id)}}" method='POST'>
  @csrf
 @method('PUT')
 <div class="mb-3">
    <label for="exampleInputBook_Name" class="form-label"> Book_Name</label>
    <input type="text" class="form-control" name="Book_Name" id="exampleInputBook_Name"value="{{$sublayout->Book_Name}}" >


    
  </div>
 <div class="mb-3">
    <label for="exampleInputBook_Name" class="form-label">Book_Category</label>
    <input type="text" class="form-control" name="name" id="exampleInputBook_Name"value="{{$sublayout->name}}" >


    
  </div>
  <div class="mb-3">
    <label for="exampleInputWriter_Name" class="form-label">Writer_Name</label>
    <input type="text" class="form-control" name="Writer_Name" id="exampleInputWriter_Name"value="{{$sublayout->Writer_Name}}" >
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPublisher_Name" class="form-label">Department_Name </label>
    <input type="text" class="form-control" name="Department_Name" id="exampleInputPublisher_Name" value="{{$sublayout->Department_Name}}">
  </div>

  <div class="mb-3">
    <label for="exampleInputavailable" class="form-label">Available</label>
    <input type="integer" class="form-control" name="Available" id="exampleInputavailable" value="{{$sublayout->Available}}">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</main>
@endsection