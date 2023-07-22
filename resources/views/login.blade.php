@extends('layout')
@section('title', 'Login to PlanetVest')
@section('contents')

<div class="container">
  <form class="ms-auto me-auto mt-auto" style="width: 500px">
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
    </div>
  <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password">
  </div>
  <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Show Password</label>
  </div>
       <button type="submit" class="btn btn-primary">Login</button>
</form>
      </div>

@endsection

