@extends('onefolder.master')
@section('content')<br><br><br><br>


<div class="">
            <a class="nav-link active" aria-current="page" href="{{route('book')}}">book list</a>
          </div>

          <li class="nav-item">
            <a class="nav-link active ,btn btn-dark" aria-current="page" href="{{route('book')}}">book list</a>
          </li>
  
        
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
<a href="{{route('checkout')}}"class="btn btn-dark">checkout</a><br><br><br>


@endsection