@extends('layouts.app')

@section('title', isset($task) ? 'Edit Task' : 'Add New Task')

@section('content')
  <form method="POST" action="{{ isset($task) ? route('tasks.update', ['task' => $task->id]) : route('tasks.store') }}">
    @csrf
    @isset($task)
      @method('PUT')
    @endisset
    <div class="mt-5">
      <label for="title">Title</label>
      <input type="text" name="title" id="title" value="{{ $task->title ?? old('title') }}" placeholder="Enter title" @class(['border-red-500 border-2' => $errors->has('title')])>
      @error('title')
        <p class="error-message">{{ $message }}</p>
      @enderror
    </div>
    <div>
      <label for="description">Description</label>
      <textarea name="description" id="description" rows="3" @class(['border-red-500 border-2' => $errors->has('description')])>
        {{ $task->description ??  old('description') }}
      </textarea>
      @error('description')
        <p class="error-message">{{ $message }}</p>
      @enderror
    </div>
    <div>
      <label for="long_description">Long Description</label>
      <textarea name="long_description" id="long_description" rows="10">
        {{ $task->long_description ??  old('long_description') }}
      </textarea>
    </div>
    <div class="flex gap-2">
      <button type="submit">
        @isset($task)
          <span class="add_btn">Update Task</span>
        @else
          <span class="add_btn">Add Task</span>
        @endisset
      </button>
      <a href="{{ route('tasks.index') }}" class="link">Cancel</a>
    </div>
  </form>
@endsection