@extends('onefolder.master')
@section('content')

<main class="  " style="margin-left: 6rem; margin-bottom: 6rem;"><br><br><br><br><br><br>
<div class="product">
 


  <header>
    <hgroup>
      <h1>Book Name:{{$choice->name}}</h1>
      <h4></h4>
    </hgroup>
  </header>
 
  <figure>
    <img src="{{asset('/uploads/profile/'.$choice->image)}}"height="550",weight="550">
  </figure>
 
  <section>
 
  <p>The book is about mordern life</p>
 
  <details>
   <summary>Product Features</summary>
      <ul>
        <li>writter name:{{$choice->name1}}</li>
        <li>quantity:{{$choice->available}}</li>
       
        <li>book name:{{$choice->name}}</li>
        <li>price:{{$choice->price}}</li>
       
        <li>Photo and video geotagging</li>
      </ul>
  </details>
 
  
  <a href="{{route('cart_add1',$choice->id)}}" class="btn btn-dark">Add to cart</a>
 
 
  </section>
 
</div>
</main>

<div class="" style="text-align: center;">
<a href="{{route('userchoice')}}">Back list page</a>
</div><br>

@endsection