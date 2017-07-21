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
            @include('partials._footer')
            @include('partials._scripts')
            @yield('scripts')
    </body>

    <style>
        html {
            position: relative;
            min-height: 100%;
        }
    </style>
</html>


