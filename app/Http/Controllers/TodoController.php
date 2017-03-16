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

		return redirect('todo');
		// $todo = Todo::all();
		// return view('todo')->with('todo', $todo);
	}

	public function postDelete($id_todo)
	{
		Todo::destroy($id_todo);
		// Todo::where('id', $id)->delete();
		return redirect('todo');
	}
}
