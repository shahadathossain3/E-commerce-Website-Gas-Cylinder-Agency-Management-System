@extends('layouts.app')

@section('content')
<div class="container">


@if($cylinder_quantity==9)
<h6 class="font-weight-bold text-danger mt-4 mb-4">You Got Already 9 Cylinder,<br>
If You Want yo Apply For Extra Cylinder Fill Up This Form And Apply
</h6>
@endif
<form action="{{route('extra.cylinder.store')}}" method="POST">
@csrf
<input type="hidden" class="form-control" name="user_id" id="user_id" value="{{Auth::user()->id}}">
<div class="mb-3">

  <label for="apply_type" class="form-label">Apply Type</label>
  <input type="text" class="form-control" name="apply_type" id="apply_type" placeholder="Apply Type">
</div>

<div class="mb-3">

  <label for="extra_cylinder_quantity" class="form-label">Extra Cylinder Quantity</label>
  <input type="number" class="form-control" name="extra_cylinder_quantity" id="extra_cylinder_quantity" placeholder="Extra Cylinder Quantity">
</div>
<div class="mb-3">
  <label for="reason" class="form-label">Reason Why Need Extra Cylinder</label>
  <textarea class="form-control" name="reason" id="reason" rows="3" placeholder="Reason"></textarea>
</div>

<div>
    <button type="submit" class="btn btn-primary mb-3">Apply</button>
  </div>
</form>
</div>
@endsection
