@extends('layouts.app')

@section('title', isset($task) ? 'Edit Task' : 'Add New Task')

@section('styles')
  <style>
    .error-message {
      color: red;
      font-size: 12px
    }
  </style>
@endsection

@section('content')
  <form method="POST" action="{{ isset($task) ? route('tasks.update', ['task' => $task->id]) : route('tasks.store') }}">
    @csrf
    @isset($task)
      @method('PUT')
    @endisset
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" id="title" value="{{ $task->title ?? old('title') }}" placeholder="Enter title">
      @error('title')
        <p class="error-message">{{ $message }}</p>
      @enderror
    </div>
    <div>
      <label for="description">Description</label>
      <textarea name="description" id="description" rows="3">
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
    <div>
      <button type="submit">
        @isset($task)
          Update Task
        @else
          Add Task
        @endisset
      </button>
    </div>
  </form>
@endsection