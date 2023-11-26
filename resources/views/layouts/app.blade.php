<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Task Lists App</title>
  @yield('styles')
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="container mx-auto mt-10 mb-10 max-w-lg">
  <h1 class="text-2xl font-bold">@yield('title')</h1>
  <div>
    @if (session()->has('success'))
      <div>{{ session('success') }}</div>
    @endif

    @yield('content')
  </div>
</body>
</html>