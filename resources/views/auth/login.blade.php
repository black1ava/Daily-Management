@extends('layouts.layout')

@section('content')
<div class="center">
  <div class="card">
    <div class="card-header">
      <h3>Login form</h3>
    </div>
    <div class="card-body">
      <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" class="form-input @error('email') invalid @enderror" value="{{ old('email') }}" autocomplete="off" required>
          @error('email')
            <small class="invalid-info">{{ $message }}</small>
          @enderror
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" class="form-input @error('password') invalid @enderror" required>
          @error('password')
            <small class="invalid-info">{{ $message }}</small>
          @enderror
        </div>
        <div>
          <button class="btn btn-primary">Login</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
