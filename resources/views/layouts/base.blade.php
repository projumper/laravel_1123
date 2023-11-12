<!-- resources/views/layouts/base.blade.php -->
 
<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>