@extends('layouts.layout')

@section('content')
  <div class="center">
    <div class="card">
      <div class="card-header">
        <h3>Register form</h3>
      </div>
      <div class="card-body">
        <form action="{{ route('register') }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-input @error('name') invalid @enderror" value="{{ old('name') }}" required autocomplete="off">
            @error('name')
              <small class="invalid-info">{{ $message }}</small>
            @enderror
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-input @error('email') invalid @enderror" value="{{ old('email') }}" required autocomplete="off">
            @error('email')
              <small class="invalid-info">{{ $message }}</small>
            @enderror
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-input @error('password') invalid @enderror" required>
            @error('password')
              <small class="invalid-info">{{ $message }}</small>
            @enderror
          </div>
          <div class="form-group">
            <label for="password-confirm">Confirm password</label>
            <input type="password" name="password_confirmation" id="password-confirm" class="form-input" required>
          </div>
          <div>
            <button class="btn btn-primary">Register</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
