@extends('layouts.app')

@section('title', $task->title)

@section('content')

  <div class="my-5">
    <a href="{{ route('tasks.index') }}" class="link">← Back to Task Lists</a>
  </div>

  <p class="mb-5 text-slate-800">{{ $task->description }}</p>

  @if ($task->long_description)
    <p class="mb-5 text-slate-800">{{ $task->long_description }}</p>
  @endif

  <p class="mb-5 text-sm text-slate-500">Created {{ $task->created_at->diffForHumans() }} • Updated {{ $task->updated_at->diffForHumans() }}</p>

  <p class="my-5">
    @if ($task->completed)
      <span class="text-sm font-medium bg-green-500 p-1 rounded-md text-white">Completed</span>
    @else
      <span class="text-sm font-medium bg-red-500 p-1 rounded-md text-white">Not Completed</span>
    @endif
  </p>
  <div class="flex gap-2">
    <a href="{{ route('tasks.edit', ['task' => $task->id]) }}" class="show_btn hover:bg-emerald-300">Edit Task</a>
  
    <form action="{{ route('tasks.completed', ['task' => $task]) }}" method="POST">
      @csrf
      @method('PUT')
      <button type="submit" class="show_btn">Task Completed ? {{ $task->completed ? 'Not Completed' : 'Completed' }}</button>
    </form>
  
    <form action="{{ route('tasks.destroy', ['task' => $task->id]) }}" method="POST">
      @csrf
      @method('DELETE')
      <button type="submit" class="show_btn hover:bg-red-300">Delete Task</button>
    </form>
  </div>
@endsection