@extends('onefolder.master')
@section('content')<br><br><br><br>
<a type="submit" class="btn btn-primary"href="{{route('cart_list1')}}">student add to cart({{count(Cart::content())}})  </a>

<div class="row" style="margin-top: 10px;">
@foreach($choices as $choice)
 <div class="col-sm-3">
        <div class="card">
            <img src="{{asset('/uploads/profile/'.$choice->image)}}" class="card-img-top" height="300px" alt="...">
            <div class="card-body">
                <h5 class="card-title">Book Name:{{$choice->name}} </h5>
                <p class="card-text">
                <h5 class="card-title"></h5>
                <h5 class="card-text">Writer Name:{{$choice->name1}} </h5>
                <h5 class="card-text">Price:{{$choice->price}} </h5>
                <h5 class="card-text">Quantity:{{$choice->available}} </h5>
                </p>
                <a href="{{route('details1',$choice->id)}}" class="btn btn-primary">details of books</a>
            </div>
        </div>
    </div>
    @endforeach
</div><br><br><br>
<div class="" style="text-align: center;">
<a href="{{route('view')}}">Back home page</a>
</div><br>

@endsection