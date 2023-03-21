@extends('two.layout.backend1')
@section('content')

<main class="col-md-10 ms-sm-auto col-lg-60 px-md-90">
<form action="{{route('update_return', $re1->id)}}" method='POST' eenctype="multipart/form-data">
  @csrf
 @method('PUT')
  <div class="mb-3">
    <label for="exampleInputname" class="form-label">student_id</label>
    <input type="integer" class="form-control"name='student_id' id="exampleInputEmail1"  placeholder="enter your name"value="{{$re1->student_id}}">
   
  </div>
  
  <div class="mb-3">
    <label for="exampleInputemail" class="form-label">Writer_Name</label>
    <input type="text" class="form-control" name='Writer_Name'id="exampleInputPassword1"placeholder="enter email"value="{{$re1->Writer_Name}}">
</div>

  
  
  <div class="mb-3">
    <label for="exampleInputphone" class="form-label">Book_Name</label>
    <input type="text" class="form-control"name='Book_Name' id="exampleInputPassword1"placeholder="enter phone"value="{{$re1->Book_Name}}">
  </div>

  <div class="mb-3">

  
        <img src="{{asset('/uploads/profile/'.$re1->image)}}"  height="50" weight="50" />
        

    <input type="file" class="form-control"name='image' id="exampleInputPassword1"placeholder="address value" value="{{$re1->image}}" >
    </div>
  <div class="mb-3">
    <label for="exampleInputphone" class="form-label">pages</label>
    <input type="text" class="form-control"name='pages' id="exampleInputPassword1"placeholder="enter phone"value="{{$re1->pages}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputphone" class="form-label">Delivery</label>
    <input type="text" class="form-control"name='Delivery' id="exampleInputPassword1"placeholder="enter phone"value="{{$re1->Delivery}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputphone" class="form-label">Return</label>
    <input type="text" class="form-control"name='Return' id="exampleInputPassword1"placeholder="enter phone"value="{{$re1->Return}}">
  </div>

 
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</main>
@endsection