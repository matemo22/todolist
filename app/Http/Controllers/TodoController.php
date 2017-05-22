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

	// public function postDelete($id_todo)
	// {
	// 	Todo::destroy($id_todo);
	// 	// Todo::where('id', $id)->delete();
	// 	return redirect('todo');
	// }

	public function postDelete(Request $request, $id)
	{
		$todo = Todo::find($id);
		$todo->delete();

		return redirect('todo');
	}

	public function edit($id)
	{
		$todo = Todo::all();
		$todo_edit = Todo::find($id);
		return view('todo')->with('todo', $todo)->with('todo_edit', $todo_edit);
	}

	public function update(Request $request)
	{
		$todo_id = $request->input('id_todo');
		$todo = Todo::find($todo_id);
		$todo->item = $request->input('todo_item');
		$todo->save();
		return redirect('todo');
		// $all_todo = Todo::all();
		// return view('todo')->with('todo',$all_todo);
	}
}
