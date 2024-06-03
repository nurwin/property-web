<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>

    <body>
        @section('sidebar')
            This is the parents sidebar.

            <ul>
                <li>
                    <a href="/page/home">Home Page</a>
                </li>

                <li>
                    <a href="/page/about">About Page</a>
                </li>
            </ul>
        @show
 
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
