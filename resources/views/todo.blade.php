<!DOCTYPE html>
<html>
<head>
	<title>ToDo List</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1>ToDo List</h1>
				<ul>
					@foreach($todo as $td)
					<!-- <li>{{ $td->item }} <button type="submit" class="btn btn-danger">x</button></li> -->
					<li>{{ $td->item }} <a href="{{ route('todo.edit',$td->id_todo) }}" class="btn btn-warning">Edit</a> <a href="{{ url('postDelete',[$td->id_todo]) }} " class="btn btn-danger">x</a></li>
					@endforeach
				</ul>
				@if(isset($todo_edit))
					<form action="{{ route('todo.update') }}" method="POST">
						<input type="hidden" name="id_todo" value="{{ $todo_edit->id_todo }}">
				@else
					<form action="todo" method="POST">
				@endif
					{{ csrf_field() }}
					<div class="row">
						<div class="col-lg-3">
							<div class="form-group">
								<input type="text" name="todo_item" class="form-control" placeholder="Item baru..." @if(isset($todo_edit)) value="{{ $todo_edit->item }}" @endif>
							</div>
						</div>
						@if(isset($todo_edit))
							<div class="col-lg-1">
								<button type="submit" class="btn btn-success">Update</button>
							</div>
						@else
						<div class="col-lg-1">
							<button type="submit" class="btn btn-success">Add</button>
						</div>
						@endif
						<div class="col-lg-8">
						</div>
					</div>
				</form>
				<script type="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			</div>
		</div>
	</div>
</body>
</html>