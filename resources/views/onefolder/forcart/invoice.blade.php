

@extends('onefolder.master')
@section('content')<br><br><br>
<table class="table"  width="">
  <thead>
    <tr>
    <th scope="col">id</th>
     
      <th scope="col">name</th>
      <th scope="col">quantity</th>
      <th scope="col">price</th>

        <th scope="col">subtotal</th>
      
      
      
      <tbody>

      @foreach($Carts as $data)
    <tr>

      
<td>{{$data->id}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->qty}}</td>
      <td>{{$data->price}}</td>

     @php
$value= $data->price* $data->qty;

     @endphp
<td>{{$value}}</td>

    </tr>
    @endforeach



      </tbody>

      
    </tr>
  </thead>
</table>   <br>
<h1>grand total= {{Cart::subtotal()}}</h1>
<h1> Total with Tax(5%)={{Cart::total()}}</h1>

<form action="{{route('placeorder')}}" method='post'class="container" >


  @csrf

  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Name</label>
    <input type="text" class="form-control"  name="name" id="exampleInputPassword1" >
  </div><br>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Book name</label>
    <input type="text" class="form-control" name="name1" id="exampleInputPassword1" >
  </div><br>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control"name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div><br>

  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">phone</label>
    <input type="tel" class="form-control" name="phone" id="exampleInputPassword1" >
  </div><br>

  
  

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Address</label>
    <input type="text" class="form-control" name="address" id="exampleInputPassword1" >
  </div><br>

  <button type="submit" class="btn btn-primary">Submit</button>
  
 
  
</form>




@endsection