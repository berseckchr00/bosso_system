<!-- Stored in resources/views/layouts/app.blade.php -->

<html>
    <head>
        <title>Bosso - @yield('title')</title>
        
    </head>
    <body>
        @section('menu')
            <div>this is menu section</div>
        @show
        @section('sidebar')
            <h1> is the master sidebar.</h1>
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>