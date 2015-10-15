<html>
    <head>
        <title>WEFC - @yield('title')</title>
        {!! Html::style('/assets/css/app.css') !!}
        <script src="https://use.typekit.net/yls7imy.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>
        @include('includes/_favicons')
    </head>
    <body>
       @include('includes/admin')
         <div class="container">
            @include('includes/_navigation')
            @yield('content')
            @include('includes/_footer')
        </div>
    </body>
</html>