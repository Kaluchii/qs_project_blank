@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Примеры'])

    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_g1" data-toggle="tab" aria-expanded="true">Контент</a></li>
            <li><a href="#tab_g2" data-toggle="tab" aria-expanded="false">Метаданные</a></li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="tab_g1">
                <div class="box-body">

                    @include('back.tpls.string', [
                    'title' => 'Заголовок',
                    'block' => $block,
                    'field_name' => 'title'
                    ])

                    @include('back.tpls.box_group', [
                    'title' => 'Примеры на формы',
                    'block' => $block,
                    'group_name' => 'examples_list'
                    ])

                    @include('back.tpls.page_group', [
                    'title' => 'Категории',
                    'block' => $block,
                    'group_name' => 'examples_categories',
                    'input_field_name' => 'category_name'
                    ])
                    
                </div>
            </div>


            <div class="tab-pane" id="tab_g2">
                <div class="box-body">

                    @include('back.tpls.seo-fields', [
                    'block' => $block
                    ])

                    @include('back.tpls.texteditor', [
                    'title' => 'SEO-текст',
                    'block' => $block,
                    'field_name' => 'seotext'
                    ])

                </div>
            </div>
        </div>
    </div>

    @include('back.tpls.last_modified', [
    'blocks' => [
        ['block_name' => 'examples']
    ]])

@endsection