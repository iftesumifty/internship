@extends('two.layout.backend1')
@section('content')

<main class="col-md-10 ms-sm-auto col-lg-60 px-md-90">
<form action="{{route('update_pro', $product->id)}}" method='POST'>
  @csrf
 @method('PUT')
 <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Book_Name</label></label>
    <input type="text" class="form-control" name="Book_Name" id="exampleInputPassword1" placeholder="enter your name"   value="{{$product->Book_Name}}" >
  </div>

        

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Writer_Name</label>
    <input type="text" class="form-control" name="Writer_Name" id="exampleInputPassword1" placeholder="enter your name"   value="{{$product->Writer_Name}}"  >
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Publisher_Name </label>
    <input type="text" class="form-control" name="Publisher_Name" id="exampleInputPassword1" placeholder="enter your name"   value="{{$product->Publisher_Name}}"  >
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Available</label>
    <input type="integer" class="form-control" name="Available" id="exampleInputPassword1" placeholder="enter your name"   value="{{$product->Available}}" >
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">price</label>
    <input type="integer" class="form-control" name="price" id="exampleInputPassword1" placeholder="enter your name"   value="{{$product->price}}"  >
  </div>
  

    
      
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</main>
@endsection