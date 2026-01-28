<!DOCTYPE html><html lang="es" class="h-100">
    <head>@include('layouts.head')</head>
    <body class="d-flex flex-column h-100">
        <!-- Header -->
        @include('layouts.header')
        
        <!-- Contenido Principal -->
        <main class="flex-shrink-0">@yield('content')</main>
        
        <!-- Footer -->
        @include('layouts.footer')
        
        <!-- Scripts -->
        @vite(['resources/js/app.js'])
        
        <!-- Scripts adicionales por vista -->
        @yield('scripts')
    </body>
</html>