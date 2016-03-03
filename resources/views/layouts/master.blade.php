<!DOCTYPE html>
<html>
    <head>
        <title>WEFC - @yield('title')</title>
        <link rel="stylesheet" href="{{ elixir('assets/css/app.css') }}">
        <script src="https://use.typekit.net/yls7imy.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>
        @include('includes/_favicons')
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
       <!-- @include('includes/admin') -->
         <div class="container">
            @include('includes/_navigation')
            <div class = "content-container">
                @yield('content')
            </div>
            <div class = "sidebar-container">
                @include('includes/_MailChimpForm')
            </div>
            <div class="footer-container">
                @include('includes/_footer')
            </div>
        </div>
    </body>
</html>
