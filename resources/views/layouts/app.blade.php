<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials._head')
</head>
<body id="app-layout">
<div class="row">
    @include('partials._navbar')
</div>
<div class="container">
    <div class="row">
        @include('partials._logo')
    </div>
    <div class="row">
        @yield('content')
    </div>
</div>
    @include('partials._footer')
    @include('partials._scripts')
    @yield('scripts')
</body>
</html>
