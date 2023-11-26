@extends('layouts.app')

@section('title', 'Task Lists')

@section('content')

  <nav class="my-5">
    <a href="{{ route('tasks.create') }}" class="text-white font-semibold text-sm bg-emerald-600 p-2 rounded-lg hover:text-black hover:bg-emerald-300  ">Add New Task</a>
  </nav>
  
  @forelse($tasks as $task)
    <div>
      <a href="{{ route('tasks.show', ['task' => $task->id]) }}" @class(['line-through text-gray-500' => $task->completed])>
        <span>{{ $task -> title }}</span>
      </a>
    </div>
  @empty
    <div>There are no tasks!</div>
  @endforelse

  @if ($tasks->count())
    <nav class="my-5">
      {{ $tasks->links() }}
    </nav>
  @endif
@endsection
