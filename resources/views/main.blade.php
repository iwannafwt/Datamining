<!DOCTYPE html>
<html>
    <head>
        @include('partials._head')
        <div class="row">
            @include('partials._logo')
        </div>
    </head>
    <body>

        <div class="container">
            <div class="row">
                 @include('partials._navbar')
            </div>
            <div class="row">
                 @yield('content')
            </div>
            <div class="row">
                 @include('partials._footer')
            </div>
        </div><!-- end of container -->
        @include('partials._scripts')
    </body>
</html>
