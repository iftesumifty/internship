@extends('two.layout.backend1')
@section('content')

<main class="col-md-10 ms-sm-auto col-lg-60 px-md-90">
<form action="{{route('update_subcat', $subcategory->id)}}" method='POST'>
  @csrf
 @method('PUT')
  <div class="mb-3">
    <label for="exampleInputname" class="form-label">self_no</label>
    <input type="text" class="form-control"name='self_no' id="exampleInputEmail1"  placeholder="enter your name"value="{{$subcategory->self_no}}">
   
  </div>
  
  <div class="mb-3">
    <label for="exampleInputemail" class="form-label">Course_Name</label>
    <input type="text" class="form-control" name='Course_Name'id="exampleInputPassword1"placeholder="enter email"value="{{$subcategory->Course_Name}}">
</div>

  
  
  <div class="mb-3">
    <label for="exampleInputphone" class="form-label">Book_Title</label>
    <input type="text" class="form-control"name='Book_Title' id="exampleInputPassword1"placeholder="enter phone"value="{{$subcategory->Book_Title}}">
  </div>

  <div class="mb-3">
    <label for="exampleInputaddress" class="form-label">Writer_Name</label>
    <input type="text" class="form-control"name='Writer_Name' id="exampleInputPassword1"placeholder="address value"value="{{$subcategory->Writer_Name}}">
  </div>
  

  <div class="mb-3">
    <label for="exampleInputaddress" class="form-label">SBIC</label>
    <input type="text" class="form-control"name='SBIC' id="exampleInputPassword1"placeholder="address value"value="{{$subcategory->SBIC}}">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</main>
@endsection