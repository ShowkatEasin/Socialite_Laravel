@extends('layouts.app')
@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">{{ __('Login') }}</div>
<div class="card-body">
 <form method="POST" action="{{-- {{ route('login') }} --}}">
     @csrf
    <div class="form-group row">
    <div class="col-md-10 offset-md-5">
      <a href="{{ url('auth/google') }}" class="btn btn-success btn-block">Login with Google</a> <br>
      {{-- <a href="{{route('login.facebook')}}" class="btn btn-primary btn-block mt-3">Login with Facebook</a><br>
      <a href="{{route('login.github')}}" class="btn btn-dark btn-block mt-3">Login with Github</a> --}}
   </div>
   </div>   
</form>
</div>
</div>
</div>
</div>
</div>
@endsection
