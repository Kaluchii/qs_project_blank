@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Категория примеров'])
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_g1" data-toggle="tab" aria-expanded="true">Контент</a></li>
            <li><a href="#tab_g2" data-toggle="tab" aria-expanded="false">Метаданные</a></li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="tab_g1">
                <div class="box-body">
                    <div class="form-group">
                        <label>Название категории</label>
                        <input class="form-control string js-slug-source"
                               type="text" placeholder=""
                               value="{{$item->category_name}}"
                               data-name="category_name"
                               data-type="string"
                               data-block="examples_categories"
                               data-id="{{$item->id}}">
                    </div>
                    <div class="form-group">
                        <label>Вид ссылки в адресной строке</label>
                        <input class="form-control string slug"
                               type="text" placeholder=""
                               value="{{$item->slug}}"
                               data-name="slug"
                               data-type="string"
                               data-block="examples_categories"
                               data-id="{{$item->id}}">
                    </div>
                </div>
            </div>


            <div class="tab-pane" id="tab_g2">
                <div class="box-body">
                    <div class="form-group">
                        <label>Тайтл</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$item->seo_title}}"
                               data-name="seo_title"
                               data-type="seo"
                               data-block="examples_categories"
                               data-id="{{$item->id}}">
                    </div>
                    <div class="form-group">
                        <label>Ключевые слова (keywords)</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$item->seo_keywords}}"
                               data-name="seo_keywords"
                               data-type="seo"
                               data-block="examples_categories"
                               data-id="{{$item->id}}">
                    </div>
                    <div class="form-group">
                        <label>Описание страницы (description)</label>
                        <textarea class="form-control text"
                                  data-name="seo_description"
                                  data-type="seo"
                                  data-block="examples_categories"
                                  data-id="{{$item->id}}">{{$item->seo_description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>SEO-текст</label>
                        <textarea class="form-control text-editor"
                                  data-name="seotext"
                                  data-type="text"
                                  data-block="examples_categories"
                                  data-id="{{$item->id}}">{{$item->seotext}}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection