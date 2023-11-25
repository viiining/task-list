@extends('layouts.app')

@section('title', $task->title)

@section('content')
  <p>{{ $task->description }}</p>

  @if ($task->long_description)
    <p>{{ $task->long_description }}</p>
  @endif

  <p>{{ $task->created_at }}</p>
  <p>{{ $task->updated_at }}</p>

  <div>
    <a href="{{ route('tasks.index') }}">Back to Home</a>
    <a href="{{ route('tasks.edit', ['task' => $task->id]) }}">Edit Task</a>
    <form action="{{ route('tasks.destroy', ['task' => $task->id]) }}" method="POST">
      @csrf
      @method('DELETE')
      <button type="submit">Delete Task</button>
    </form>
  </div>
@endsection