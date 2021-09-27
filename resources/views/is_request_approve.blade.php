@extends('layouts.app')

@section('content')
<div class="container">
<h2>Leave Application List</h2>
<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">User ID</th>
      <th scope="col">Apply Type</th>
      <th scope="col">From Start Date</th>
      <th scope="col">Extra Cylinder Quantity</th>
      <th scope="col">Reason</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  @foreach ($approve_datas as $approve_data)
  <tbody>
    <tr>
      <th scope="row"> {{$approve_data->user_id}} </th>
      <td> {{$approve_data->apply_type}} </td>
      <td> {{$approve_data->extra_cylinder_quantity}} </td>
      <td> {{$approve_data->reason}} </td>
      <td> 
      @if ($approve_data->is_requesr_approved==1)
      
      <strong class="text-success">Approve</strong>
      
      @elseif($approve_data->is_requesr_approved==2)
      
      <strong class="text-danger"> Rejected</strong>

      @else
      <strong class="text-primary">Pending</strong>
      
      @endif
    </td>
      <td>
      <form action="{{route('approve.status.submit',$approve_data->id)}}" method="POST">
      @csrf
      @method('PUT')
     
       <button type="submit" class="btn btn-primary" name="is_requesr_approved" id="is_requesr_approved" value="1" {{($approve_data-> is_requesr_approved == 1 || $approve_data->is_requesr_approved == 2) ? 'disabled' : ''}}>Approve</button>
       <button type="submit" class="btn btn-danger" name="is_requesr_approved" id="is_requesr_approved" value="2" {{($approve_data->is_requesr_approved == 1 || $approve_data->is_requesr_approved == 2) ? 'disabled' : ''}}>Rejected</button>
       </form>
       </td>
    </tr>
  </tbody>
  @endforeach
</table>
@endsection

