@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{route('product.stock.store')}}" method="POST">
@csrf
<div class="row">
<div class="col-md-6">
<div class="mb-3">
  <label for="product_id" class="form-label">Product ID</label>
  <input type="text" class="form-control" name="product_id" id="product_id" placeholder="Product ID">
</div>
</div>

<div class="col-md-6">
<div class="mb-3">
  <label for="company_id" class="form-label">Company ID</label>
  <input type="text" class="form-control" name="company_id" id="company_id" placeholder="Company ID">
</div>
</div>
</div>

<div class="row">
<div class="col-md-6">
<div class="mb-3">
  <label for="company_name" class="form-label">Company Name</label>
  <input type="text" class="form-control" name="company_name" id="company_name" placeholder="Company Name">
</div>
</div>

<div class="col-md-6">
<div class="mb-3">
  <label for="add_new_product_quantity" class="form-label">Product Quantity</label>
  <input type="number" class="form-control" name="add_new_product_quantity" id="add_new_product_quantity" placeholder="Product Quantity">
</div>
</div>
</div>

<div class="row">
<div class="col-md-6">
<div class="mb-3">
  <label for="stock_entry_date" class="form-label">Stock Entry Date</label>
  <input type="date" class="form-control" name="stock_entry_date" id="stock_entry_date" placeholder="Stock Entry Date">
</div>
</div>
</div>


<div>
    <button type="submit" class="btn btn-primary mb-3">Submit</button>
  </div>
</form>
</div>
@endsection
