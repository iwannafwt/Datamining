<!DOCTYPE html>
<html>
    <head>
        @include('partials._head')
    </head>
    <body>

        <div class="container">
            @include('partials._navbar')
            @yield('content')
            @include('partials._footer')
        </div><!-- end of container -->
        @include('partials._scripts')
    </body>
</html>
