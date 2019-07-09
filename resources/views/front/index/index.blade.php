@extends('front.layout')
@section('content')
    @include('front.meta', [
        'title' => $index_page->seo_title,
        'description' => $index_page->seo_description,
        'keywords' => $index_page->seo_keywords,
        'spare' => 'Качественные окна по лучшей цене'
    ])


    <main class="page__content content">
        @include('front.index.blocks.title')
        @include('front.index.blocks.windows')
        @include('front.index.blocks.help')
        @include('front.index.blocks.quality')
        @include('front.index.blocks.best_price')
        @include('front.index.blocks.reviews')
        @include('front.index.blocks.contacts')
    </main>

    <div class="thanks-screen js_thanks_screen">
        <div class="thanks-screen__container">
            <div class="thanks-screen__text-wrapper">
                <p class="thanks-screen__title">Спасибо!</p>
                <p class="thanks-screen__text">Мы свяжемся с вами в ближайшее время по указанному номеру телефона.</p>
            </div>
        </div>
    </div>

@endsection
