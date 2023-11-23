@extends('layouts.app')

@section('title', 'Edit Task')

@section('styles')
  <style>
    .error-message {
      color: red;
      font-size: 12px
    }
  </style>
@endsection

@section('content')
  <form method="POST" action="{{ route('tasks.update', ['id' => $task->id]) }}">
    @csrf
    {{-- 因為 form method 只有 "GET" 與 "POST"，所以要用 @method('PUT') 來指定 method 為 "PUT" (或 "PATCH") --}}
    @method('PUT')
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" id="title"  value="{{ $task->title }}" placeholder="Enter title">
      @error('title')
        <p class="error-message">{{ $message }}</p>
      @enderror
    </div>
    <div>
      <label for="description">Description</label>
      <textarea name="description" id="description" rows="3">
        {{ $task->description }}
      </textarea>
      @error('title')
        <p class="error-message">{{ $message }}</p>
      @enderror
    </div>
    <div>
      <label for="long_description">Long Description</label>
      <textarea name="long_description" id="long_description" rows="10">
        {{ $task->long_description }}
      </textarea>
    </div>
    <div>
      <button type="submit">Edit Task</button>
    </div>
  </form>
@endsection