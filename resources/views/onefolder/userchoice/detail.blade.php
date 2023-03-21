@extends('onefolder.master')
@section('content')

<main class="  " style="margin-left: 6rem; margin-bottom: 6rem;"><br><br><br><br><br><br>
<div class="product">
 


  <header>
    <hgroup>
      <h1>Book Name:{{$choices->name}}</h1>
      <h4></h4>
    </hgroup>
  </header>
 
  <figure>
    <img src="{{asset('/uploads/profile/'.$choices->image)}}"height="550",weight="550">
  </figure>
 
  <section>
 
  <p>The book is about mordern life</p>
 
  <details>
   <summary>Product Features</summary>
      <ul>
        <li>writter name:{{$choices->name1}}</li>
        <li>publication:dhurbo</li>
        <li>book name:{{$choices->name}}</li>
        <li>price{{$choices->price1}}</li>
       
        <li>Photo and video geotagging</li>
      </ul>
  </details>
 
  <button >Buy Now</button>
  <a href="{{route('buy')}}" class="btn btn-dark">Buy Now</a>
 
 
  </section>
 
</div>
</main>


@endsection