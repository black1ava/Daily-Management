@extends('layouts.layout')

@section('content')
<div class="main-content p-fixed logged-in">
  <div class="card w-100">
    <div class="card-header">
      <h2>Your tasks</h2>
    </div>
    <div class="card-body">
      <div class="tab">
        <div class="tab-menu">
          <button class="tab-link active" content-id="todo">Todo</button>
          <button class="tab-link" content-id="note">Note</button>
          <button class="tab-link" content-id="transaction">Transaction</button>
        </div>
        <div class="tab-content active" id="todo">
          <table>
            <tr>
              <th>Id</th>
              <th>Todo</th>
              <th>Date</th>
              <th>Actions</th>
            </tr>
            <tr>
              <td colspan="4" class="text-align-center help-text">
                No data to show
              </td>
            </tr>
          </table>
        </div>
        <div class="tab-content" id="note">
          <table>
            <tr>
              <th>Id</th>
              <th>Title</th>
              <th>Description</th>
              <th>Actions</th>
            </tr>
            <tr>
              <td colspan="4" class="text-align-center help-text">
                No data to show
              </td>
            </tr>
          </table>
        </div>
        <div class="tab-content" id="transaction">
          <table>
            <tr>
              <th>ID</th>
              <th>Amount</th>
              <th>Date</th>
              <th>End date</th>
              <th>Description</th>
              <th>Total</th>
              <th>Actions</th>
            </tr>
            <tr>
              <td colspan="7" class="text-align-center help-text">
                No data to show
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
