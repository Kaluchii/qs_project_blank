@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Категория примеров'])

    <div class="box box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Поля для редактирования данных</h3>
        </div>
        <div class="box-body">

            @include('back.tpls.string', [
            'title' => 'Название категории',
            'block' => $block,
            'class' => 'js-slug-source',
            'field_name' => 'title'
            ])

            @include('back.tpls.string', [
            'title' => 'Вид ссылки в адресной строке',
            'block' => $block,
            'class' => 'slug',
            'field_name' => 'title'
            ])

        </div>
    </div>

@endsection