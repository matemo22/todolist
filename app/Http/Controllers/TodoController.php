<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    public function index()
    {
    	$todo = Todo::all();
    	return view('todo')->with('todo', $todo);
    }

    public function store(Request $request)
	{
		$todo_item = $request->input('todo_item');
		$todo = new Todo;
		$todo->item = $todo_item;
		$todo->save();

		$todo = Todo::all();
		return view('todo')->with('todo', $todo);
	}
}
