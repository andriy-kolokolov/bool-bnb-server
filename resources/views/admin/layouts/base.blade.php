<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    </head>
<body>

    @include('admin.includes.header')

    <main class="main-container">
        <div class="container-fluid">
            @yield('contents')
        </div>
    </main>

    @include('admin.includes.footer')

</body>
</html>
