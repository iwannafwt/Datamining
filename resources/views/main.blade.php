<!DOCTYPE html>
<html>
    <head>
        @include('partials._head')
    </head>
    <body>
        <div class="container">
            @yield('content')
            @include('partials._footer')
        </div><! end of container -->
        @include('partials._scripts')
    </body>
</html>
