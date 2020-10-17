<html>
    <head>
        <title>
            @yield('title', 'No title')
        </title>
        <link rel="icon" href="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg">
        @if ($theme == 'dark')
            <style>
                body {
                    background-color: darkslategray
                }
                .logo {
                    width: 15%;
                    height: 12%;
                }
            </style>
        @else 
        <style>
            .logo {
                width: 15%;
                height: 12%;
            }
        </style>
        @endif
    </head>
    <body>
        <div class="logo">
            <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg">
        </div>
        <header>
            <ul>
                <li><a href='/'>Home<a></li>                    
                <li><a href='/about'>About<a></li>
                <li><a href='/login'>Sign in<a></li>
            </ul>
        </header>
        <div>
            @yield('content')
        </div>
        <div>
            <br>
            @if ($footer)
                @yield('footer')
            @endif
        </div>
    </body>
</html>