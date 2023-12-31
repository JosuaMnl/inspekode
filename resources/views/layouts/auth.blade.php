<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')
</head>

<body>
    {{-- Navbar --}}
    @include('partials.nav')

    {{-- Content --}}
    @yield('body')

    {{-- Script --}}
    @yield('before-script')
    @include('partials.script')
    @yield('after-script')
</body>

</html>
