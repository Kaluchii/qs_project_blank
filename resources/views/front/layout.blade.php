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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="HandheldFriendly" content="true">
    <meta name="googlebot" content="NOODP">
    <meta name="publisher" content="Название сайта и заголовок">
    <meta name="author" content="Название сайта и заголовок">
    <meta name="copyright" content="Название сайта и заголовок">
    <meta name="revisit-after" content="5 days">
    {{--<meta name="Cache-Control" content="no-cache, must-revalidate">--}}

    @include('front.manifest')
    @yield('meta')

    @include('front.styles')
    {!! $scripts->before_head_close !!}
</head>
<body class="page">
{!! $scripts->after_body_open !!}

<div class="page__wrapper">
    @include('front.header')

    @yield('content')

    @include('front.footer')

    <div class="hidden">
        @include('front.popups.calculate_order_form')
        @include('front.popups.question_form')
        @include('front.popups.review_form')
        @include('front.popups.discount_form')
    </div>

</div>

@include('front.scripts')

{!! $scripts->before_body_close !!}

</body>
</html>
