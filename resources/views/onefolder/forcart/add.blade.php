@extends('onefolder.master')
@section('content')<br><br><br><br>
<main class="  " style="margin-left: 6rem; margin-bottom: 6rem;"><br><br><br><br><br><br>
<div class="product">
 


  <header>
    <hgroup>
      <h1>Book Name:{{$re->book_name}}</h1>
      <h4></h4>
    </hgroup>
  </header>
 
  <figure>
    <img src="{{asset('/uploads/profile/'.$re->image)}}"height="550",weight="550">
  </figure>
 
  <section>
 
  <p>The book is about mordern life</p>
 
  <details>
   <summary>Product Features</summary>
      <ul>
        <li>writter name:{{$re->Writer_Name}}</li>
        <li>writter name:{{$re->quantity}}</li>
        <li>publication:{{$re->publication}}</li>
        <li>book name:{{$re->book_name}}</li>
        <li>price{{$re->price}}</li>
        <li>Retina display{{$re->book_name}}</li>
        <li>Photo and video geotagging</li>
      </ul>
  </details>
 
  <button>Buy Now</button>
 <a href="{{route('cart_add',$re->id)}}" class="btn btn-dark">add cart</a>
 
  </section>
 
</div>
</main>

@endsection