@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form id="login" method="POST" action=''>
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                     

                        <div class="form-check">
  <input class="form-check-input" type="radio" name="employee" id="user" value="user" >
  <label class="form-check-label" for="user">
    User
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="employee" id="admin" value="admin">
  <label class="form-check-label" for="admin">
    Admin
  </label>
</div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                              
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>

$(document).ready(function(){
  $("input[name='employee']").change(function(){
    if($("#user").prop("checked") == true){
      $("#login").attr("action", "{{ route('login') }}")
    }
   
    if($("#admin").prop("checked") == true){
      $("#login").attr("action", "{{ route('admin.login.submit') }}")
    }
  });
});          
    </script>
</div>
@endsection