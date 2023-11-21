<h1>The list of tasks:</h1>

<div>
  <!-- Method 1 -->
  <!-- @if(count($tasks))
    @foreach($tasks as $task)
      <p>{{ $task -> id }} : <span>{{ $task -> title }}</span></p>
    @endforeach
    <div>There are tasks!</div>
  @else
    <div>There are no tasks!</div>
  @endif -->
  
  <!-- Method 2 -->
  @forelse($tasks as $task)
    <p>{{ $task -> id }} : <span>{{ $task -> title }}</span></p>
  @empty
    <div>There are no tasks!</div>
  @endforelse
</div>

