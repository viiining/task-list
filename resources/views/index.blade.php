<h1>The list of tasks:</h1>

<div>
  @forelse($tasks as $task)
    <div>
      <a href="{{ route('tasks.show', ['id' => $task->id]) }}"><span>{{ $task -> title }}</span></a>
    </div>
  @empty
    <div>There are no tasks!</div>
  @endforelse
</div>

