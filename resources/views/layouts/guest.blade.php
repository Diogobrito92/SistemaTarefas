<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DB Solutions</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/DB Solutions.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">

    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-slate-900 via-blue-900 to-slate-800 px-4">

        <div class="w-full max-w-md">

            <!-- Logo -->
            <div class="text-center mb-8">

                <img
                    src="{{ asset('images/DB Solutions.png') }}"
                    alt="DB Solutions"
                    class="h-24 mx-auto mb-4"
                >

                <h1 class="text-3xl font-bold text-white">
                    DB Solutions
                </h1>

                <p class="text-gray-300 mt-2">
                    Soluções digitais inteligentes
                </p>

            </div>

            <!-- Card -->
            <div class="bg-white/95 backdrop-blur rounded-2xl shadow-2xl p-8">

                {{ $slot }}

            </div>

        </div>

    </div>

</body>

</html>