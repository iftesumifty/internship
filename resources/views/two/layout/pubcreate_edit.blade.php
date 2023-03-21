@extends('two.layout.backend1')
@section('content')

<main class="col-md-10 ms-sm-auto col-lg-60 px-md-90">
<form action="{{route('pubcreate_update', $re->id)}}" method='POST'>
  @csrf
 @method('PUT')
 <div class="mb-3">
    <label for="exampleInputBook_Name" class="form-label"> Writer_Name</label>
    <input type="text" class="form-control" name="Writer_Name" id="exampleInputBook_Name"value="{{$re->Writer_Name}}" >


    
  </div>
 <div class="mb-3">
    <label for="exampleInputBook_Name" class="form-label">book_name</label>
    <input type="text" class="form-control" name="book_name" id="exampleInputBook_Name"value="{{$re->book_name}}" >


    
  </div>
  <div class="mb-3">
    <label for="exampleInputWriter_Name" class="form-label">publication</label>
    <input type="text" class="form-control" name="publication" id="exampleInputWriter_Name"value="{{$re->publication}}" >
  </div>
  
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</main>
@endsection