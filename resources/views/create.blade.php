@extends('layouts.app')

@section('title', 'Add New Task')

@section('content')
  <form method="POST" action="{{ route('tasks.store') }}">
    @csrf
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" id="title" placeholder="Enter title">
    </div>
    <div>
      <label for="description">Description</label>
      <textarea name="description" id="description" rows="3"></textarea>
    </div>
    <div>
      <label for="long_description">Long Description</label>
      <textarea name="long_description" id="long_description" rows="10"></textarea>
    </div>
    <div>
      <button type="submit">Add Task</button>
    </div>
  </form>
@endsection