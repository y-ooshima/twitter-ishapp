<html>
    <head>
        <title>@yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        @component('components.header')
        @endcomponent
        <div class="container pt-5 pb-5">
                @component('components.flash')
                @endcomponent
            @yield('content')
        </div>

        @component('components.footer')
        @endcomponent

         <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html> 