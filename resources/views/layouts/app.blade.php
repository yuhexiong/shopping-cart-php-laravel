<!-- resources/views/layouts/app.blade.php -->
 
<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @include('layouts/nav')
        @section('sidebar')
            This is the master sidebar.
        @show
        <div class="container">
            @yield('content')
        </div>
        @include('layouts/footer')
    </body>
</html>