<!DOCTYPE html>
<html>
    <head>
        @include('partials._head')
    </head>
    <body>

        @yield('content')

        @include('partials._footer')

        @include('partials._scripts')
    </body>
</html>
