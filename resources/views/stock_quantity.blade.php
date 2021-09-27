@extends('layouts.app')

@section('content')
<div class="container">
<h2>Leave Application List</h2>
<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Product ID</th>
      <th scope="col">Company ID</th>
      <th scope="col">Company Name</th>
      <th scope="col">Last Added Product Quantity</th>
      <th scope="col">Total Product Quantity</th>
     
    </tr>
  </thead>
  @foreach ($stock_quantitys as $stock_quantity)
  <tbody>

  @if($stock_quantity->add_with_new_product==0)
    <tr>
      <th scope="row"> {{$stock_quantity->product_id}} </th>
      <td> {{$stock_quantity->company_id}} </td>
      <td> {{$stock_quantity->company_name}} </td>
      <td> {{$stock_quantity->add_new_product_quantity}} </td>
      <td> {{$stock_quantity->total_product_quantity}} </td>
    </tr>
    @endif
  </tbody>
  @endforeach
</table>
@endsection

