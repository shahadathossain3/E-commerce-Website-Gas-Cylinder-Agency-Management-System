@extends('layouts.app')

@section('content')
<div class="container">
@foreach ($users as $user)
<form action="{{route('distributor.cylinder.store')}}" method="POST">
<div class="card mb-3">
<div class="card-body">
@csrf

<div class="row">
<input type="hidden" class="form-control" name="user_id[]" value="{{$user->id}}">
<div class="col-md-3">
<div class="form-group">
<div class="mb-4">
  <label for="user_name" class="form-label">User</label>
  <input type="text" class="form-control" name="user_name[]" id="user_name" value="{{$user->name}}" readonly>
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<div class="mb-3">
  <label for="product_id" class="form-label">Product ID</label>
  <input type="text" class="form-control" name="product_id[]" id="product_id">
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<div class="mb-3">
  <label for="company_id" class="form-label">Company ID</label>
  <input type="text" class="form-control" name="company_id[]" id="company_id">
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<div class="mb-3">
  <label for="company_name" class="form-label">Company Name</label>
  <input type="text" class="form-control" name="company_name[]" id="company_name">
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-3">
<div class="form-group">
<div class="mb-3">
  <label for="cylinder_quantity" class="form-label">Cylinder Quantity</label>
  <input type="number" class="form-control" name="cylinder_quantity[]" id="cylinder_quantity">
</div>
</div>
</div>

<div class="col-md-3">
<div class="form-group">
<div class="mb-3">
  <label for="distributor_date" class="form-label">Distributor Date</label>
  <input type="date" class="form-control" name="distributor_date[]" id="distributor_date">
</div>
</div>
</div>
</div>
</div>
</div>

@endforeach
<button type="submit" class="btn btn-primary">Submit</button>
<button type="reset" class="btn btn-danger">Cancel</button>
</form>
</div>

@endsection
