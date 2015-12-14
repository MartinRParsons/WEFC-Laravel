<!DOCTYPE html>
<html>
    <head>
        <title>WEFC - @yield('title')</title>
        {!! Html::style('/assets/css/app.css') !!}
        <script src="https://use.typekit.net/yls7imy.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>
        @include('includes/_favicons')
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
       @include('includes/admin')
         <div class="container">
            @include('includes/_navigation')
            <div class = "content-containter">
                @yield('content')
            </div>
            @include('includes/_footer')
        </div>
    </body>
</html>
