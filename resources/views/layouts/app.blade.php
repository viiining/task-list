<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Task Lists App</title>
  <script src="https://cdn.tailwindcss.com"></script>

  {{-- blade-formatter-disable --}}
  <style type="text/tailwindcss">
    .add_btn {
      @apply text-white font-semibold text-sm bg-emerald-600 p-2 rounded-lg hover:text-black hover:bg-emerald-300
    }
    .show_btn {
      @apply rounded-md px-2 py-1 text-center font-medium text-slate-700 shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50
    }
    .link {
      @apply text-black font-semibold hover:underline decoration-emerald-600 decoration-4
    }
  </style>
  {{-- blade-formatter-enable --}}

  @yield('styles')
  
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