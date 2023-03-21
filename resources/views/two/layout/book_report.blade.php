@extends('two.layout.backend1')
@section('content')
<main class="col-md-10 ms-sm-auto col-lg-60 px-md-90">
<table class="table">
  <thead>
    <tr>
    <th scope="col">#</th>
      <th scope="col">Book Name</th>
      <th scope="col">Writer Name</th>
      <th scope="col">price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Available</th>
      <th scope="col">Rent</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Programming</td>
      <td>Asthon</td>
      <td>$80</td>
      <td>@50</td>
      <td>@5</td>
      <td>0</td>
    </tr>
    <tbody>
    
  </tbody>
</table>
</main>

 @endsection

