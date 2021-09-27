@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{route('payment.submit')}}" method="POST">
@csrf
<div class="row">

<input type="hidden" class="form-control" name="user_id" id="user_id" value="{{Auth::user()->id}}">

<div class="col-md-6">
<div class="mb-3">
  <label for="payment_mobile_number" class="form-label">Payment Mobile Number</label>
  <input type="text" class="form-control" name="payment_mobile_number" id="payment_mobile_number" placeholder="Payment Mobile Number">
</div>
</div>

<div class="col-md-6">
<div class="mb-3">
  <label for="transation_number" class="form-label">Transation Number</label>
  <input type="text" class="form-control" name="transation_number" id="transation_number" placeholder="Transation Number">
</div>
</div>
</div>


<div class="row">
<div class="col-md-6">
<div class="form-check">
  <input class="form-check-input" type="radio" name="bkash_or_nogod" id="bkash_or_nogod" value="bkash">
  <label class="form-check-label" for="bkash_or_nogod">
    Bkash
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="bkash_or_nogod" id="bkash_or_nogod" value="nogod">
  <label class="form-check-label" for="bkash_or_nogod">
    Nogod
  </label>
</div>
</div>
</div>


<div class="mt-4">
    <button type="submit" class="btn btn-primary mb-3">Submit</button>
  </div>
</form>
</div>
@endsection
