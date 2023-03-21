@extends('onefolder.master')
@section('content')<br><br><br><br>


<div class="">
           
        
<table class="table"  width="">
  <thead>
    <tr>
    <th scope="col">id</th>
     
      <th scope="col">book_name</th>
     
      <th scope="col">price</th>

        <th scope="col">subtotal</th>
      
      
      
      <tbody>

      @foreach($Carts as $data1)
    <tr>

      
<td>{{$data1->id}}</td>
      <td>{{$data1->name}}</td>
     
      <td>{{$data1->price1}}</td>

      @php
$value= $data1->price1* $data1->qty;

     @endphp
<td>{{$value}}</td> 

    </tr>
    @endforeach



      </tbody>

      
    </tr>
  </thead>
</table>   <br>
<h1>grand total= {{cart::subtotal()}}</h1>
<h1> Total with Tax(5%)={{cart::total()}}</h1>
<a href="{{route('checkout')}}"class="btn btn-dark">checkout</a><br><br><br>


@endsection