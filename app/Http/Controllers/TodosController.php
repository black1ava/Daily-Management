<?php

namespace App\Http\Controllers;
use App\Models\todos;

use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function create(){
      return view('todo/new');
    }

    public function store(){
      

      $todo = request('todo');
      $date = request('date');
      error_log($todo);
      return redirect('/');
    }
}
