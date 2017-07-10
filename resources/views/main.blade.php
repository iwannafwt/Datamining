<!DOCTYPE html>
<html>
    <head>
        @include('partials._head')
    </head>
    <body>

        <div class="container">
            <div class="row">
            @include('partials._logo')
            </div>
            <div class="row">
                 @include('partials._navbar')
            </div>
            <div class="row">
                 @yield('content')
            </div>

        </div><!-- end of container -->
        <div class="row">
            @include('partials._footer')
        </div>
        @include('partials._scripts')
    </body>
</html>
