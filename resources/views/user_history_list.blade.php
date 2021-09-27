@extends('layouts.app')

@section('content')
<div class="container">
<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">USER ID</th>
      <th scope="col">User Name</th>
      <th scope="col">Email</th>
      <th scope="col">History Details</th>
      
    </tr>
  </thead>
  @foreach ($users as $user)
  <tbody>
    <tr>
      <th scope="row"> {{$user->id}} </th>
      <td> {{$user->name}} </td>
      <td> {{$user->email}} </td>
    
      <td>
       <a class="btn btn-primary" href="{{route('user.history',$user->id)}}" role="button">View History</a>
       </td>
    </tr>
  </tbody>
  @endforeach
</table>
@endsection
