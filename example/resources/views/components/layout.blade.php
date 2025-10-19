<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Home' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex flex-col bg-gray-100">

<!-- ✅ NAVBAR -->
<nav class="bg-gray-800 shadow-md">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <!-- Left section -->
            <div class="flex items-center space-x-3">
                <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
                     alt="Logo" class="h-8 w-8">
                <div class="hidden md:flex space-x-4">
                    <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                    <x-nav-link href="/jobs" :active="request()->is('jobs*')">Jobs</x-nav-link>
                    <x-nav-link href="/contact" :active="request()->is('contact')">Contact Us</x-nav-link>
                </div>
            </div>

            <!-- Right section -->
            <div class="flex items-center space-x-4">
                @guest
                    <x-nav-link href="/auth/login" :active="request()->is('auth/login')">Log In</x-nav-link>
                    <x-nav-link href="/auth/register" :active="request()->is('auth/register')">Register</x-nav-link>
                @endguest
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-form_button>Log Out</x-form_button>
                    </form>
                @endauth


            </div>
        </div>
    </div>
</nav>

<!-- ✅ HEADER -->
<header class="bg-white shadow-sm">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex flex-col sm:flex-row justify-between items-center">
        <h1 class="text-2xl font-bold text-gray-900">{{ $heading ?? '' }}</h1>

        <x-button href="/jobs/create">Create Job</x-button>

    </div>
</header>

<!-- ✅ MAIN CONTENT -->
<main class="flex-grow mx-auto w-full max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
    {{ $slot }}
</main>

<!-- ✅ FOOTER (optional) -->
<footer class="bg-gray-800 text-gray-300 text-center py-4">
    <p class="text-sm">&copy; {{ date('Y') }} JobPortal. All rights reserved.</p>
</footer>

</body>
</html>
