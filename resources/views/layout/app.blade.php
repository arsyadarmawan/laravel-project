<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>{{config('app.name','firstapp')}} </title>
        <style></style>
    </head>
    <body>
        @include('inc.navbar')
        <div class="container" style="padding-top: 70px;">
            @yield('content')
        </div>
    </body>
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
</html>
