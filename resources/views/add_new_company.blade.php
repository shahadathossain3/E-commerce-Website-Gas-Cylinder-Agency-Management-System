@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{route('company.store')}}" method="POST">
@csrf
<div class="row">


<div class="col-md-6">
<div class="mb-3">
  <label for="company_id_number" class="form-label">Company ID</label>
  <input type="text" class="form-control" name="company_id_number" id="company_id_number" placeholder="Company ID">
</div>
</div>

<div class="col-md-6">
<div class="mb-3">
  <label for="company_name" class="form-label">Company Name</label>
  <input type="text" class="form-control" name="company_name" id="company_name" placeholder="Company Name">
</div>
</div>
</div>

<div class="row">

<div class="col-md-6">
<div class="mb-3">
  <label for="product_id" class="form-label">Product ID</label>
  <input type="text" class="form-control" name="product_id" id="product_id" placeholder="Product ID">
</div>
</div>

<div class="col-md-6">
<div class="mb-3">
  <label for="company_entry_date" class="form-label">Company Entry Date</label>
  <input type="date" class="form-control" name="company_entry_date" id="company_entry_date" placeholder="Company Entry Date">
</div>
</div>
</div>


<div>
    <button type="submit" class="btn btn-primary mb-3">Submit</button>
  </div>
</form>
</div>
@endsection
