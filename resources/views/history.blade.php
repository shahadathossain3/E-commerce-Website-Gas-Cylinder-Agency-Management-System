@extends('layouts.app')

@section('content')
<div class="container">
<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">USER ID</th>
      <th scope="col">Payment Mobile Number</th>
      <th scope="col">Transation Number</th>
      <th scope="col">bkash or Nogod</th>
      <th scope="col">Payment Date</th>
      <th scope="col"> Payment Status</th>
    </tr>
  </thead>
  @foreach ($historyes as $history)
  <tbody>
  @if ($history->user_id==$id)
    <tr>
      <th scope="row"> {{$history->user_id}} </th>
      <td> {{$history->payment_mobile_number}} </td>
      <td> {{$history->transation_number}} </td>
      <td> {{$history->bkash_or_nogod}} </td>
      <td> {{$history->payment_date}} </td>
      <td> 
      @if($history->is_late_payment==1)
      <strong> Not Late </strong>
      @else
      <strong> Late </strong>
      @endif
       </td>
    
    </tr>
    @endif
  </tbody>
  @endforeach
</table>
@endsection