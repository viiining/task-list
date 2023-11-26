<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Task Lists App</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="//unpkg.com/alpinejs" defer></script>

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

    label {
      @apply block font-medium text-slate-700 mb-2
    }

    input, textarea {
      @apply block w-full border border-slate-300 rounded-md shadow-sm p-2 my-2 text-slate-700
    }

    .error-message {
      @apply text-red-500 text-xs
    }
  </style>
  {{-- blade-formatter-enable --}}

  @yield('styles')
  
</head>
<body class="container mx-auto mt-10 mb-10 max-w-lg">
  <h1 class="text-2xl font-bold">@yield('title')</h1>
    @if (session()->has('success'))
      <div x-data="{ flash: true }">
        <div x-show="flash" class="relative my-5 px-2 py-3 rounded-lg border border-2 border-green-500 bg-green-200 w-full font-medium text-md" role="alert">
          <strong class="font-bold">Success!</strong>
          <div>{{ session('success') }}</div>
          <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg @click="flash = false" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </span>
        </div>
    @endif

    @yield('content')
  </div>
</body>
</html>