<!DOCTYPE html>
<html lang="ru">
<head>
    @if($app->environment('local'))
        <meta name="robots" content="noindex, nofollow">
    @else
        <meta name="robots" content="index,follow">
    @endif
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="HandheldFriendly" content="true">
    <meta name="author" content="goBIG.kz">
    <meta name="copyright" content="ТОО гоуБиг">
{{--        <link rel="icon" type="image/png" href="/img/fav.png">--}}
    @include('front.manifest')
    @yield('meta')
    @include('front.meta.styles')
    @include('front.meta.scripts')
    {{--    {!! $scripts->before_head_close !!}--}}
</head>
<body class="page">
{{--{!! $scripts->after_body_open !!}--}}
<div class="page__wrapper">
    @include('front.header')
    @yield('content')
    @include('front.footer')
</div>
{{--{!! $scripts->before_body_close !!}--}}
</body>
</html>
