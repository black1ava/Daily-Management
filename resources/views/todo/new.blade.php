@extends('layouts/layout')
@section('content')
  <div class="main-content p-fixed logged-in">
    <div class="card w-100">
      <div class="card-header">
        <h2>New todo</h2>
      </div>
      <div class="card-body">
        <form action="{{ route('todo.store') }}" method="post">
          @csrf
          <div class="form-group">
            <label for="todo">Todo</label>
            <input type="text" name="todo" class="form-input">
          </div>
          <div class="form-group">
            <label for="date">Date</label>
            <input type="date" name="date" class="form-input">
          </div>
          <div>
            <button class="btn btn-primary">Create</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
