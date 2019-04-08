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
                    <div class="form-group">
                        <label>Заголовок</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$block->title}}"
                               data-name="title"
                               data-type="string"
                               data-block="examples"
                               data-id="0">
                    </div>
                    
                    <div class="box box-info group-item-widget" data-block="examples_list">
                        <div class="box-header with-border">
                            <h3 class="box-title"> Примеры </h3>
                            <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить</button>
                        </div>
                        <div class="box-body">
                            <div class="groupflat-widget group-item-wrap">
                                @foreach($block->examples_list_group as $item)
                                    @include('back.groups.examples_list.examples_list_box', ['item' => $item])
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="box table-widget">
                            <div class="box-header with-border">
                                <h3 class="box-title"> Категории </h3>
                                <button type="button" data-parent="0" class="btn btn-primary pull-right add-group-item">Добавить</button>
                                <div class="col-xs-5 pull-right">
                                    <input type="text" class="form-control add-item"
                                           data-name="category_name"
                                           data-block="examples_categories"
                                           placeholder="Название элемента"
                                    >
                                </div>
                            </div>
                            <div class="box-body">
                                <table class="table table-bordered table-hover dataTable table-widget-selector"
                                       data-block="examples_categories">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1">ID</th>
                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1">Имя</th>
                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1">Дата редактирования</th>
                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1">Статус публикации</th>
                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1">Порядок выдачи</th>
                                        <th tabindex="0"  rowspan="1" colspan="1">Удаление</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($block->examples_categories_group as $item)
                                        @include('back.groups.examples_categories.examples_categories_row',['item' => $item])
                                    @endforeach

                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="tab-pane" id="tab_g2">
                <div class="box-body">
                    <div class="form-group">
                        <label>Тайтл</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$block->seo_title}}"
                               data-name="seo_title"
                               data-type="seo"
                               data-block="examples"
                               data-id="0">
                    </div>
                    <div class="form-group">
                        <label>Ключевые слова (keywords)</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$block->seo_keywords}}"
                               data-name="seo_keywords"
                               data-type="seo"
                               data-block="examples"
                               data-id="0">
                    </div>
                    <div class="form-group">
                        <label>Описание страницы (description)</label>
                        <textarea class="form-control text"
                                  data-name="seo_description"
                                  data-type="seo"
                                  data-block="examples"
                                  data-id="0">{{$block->seo_description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>SEO-текст</label>
                        <textarea class="form-control text-editor"
                                  data-name="seotext"
                                  data-type="text"
                                  data-block="examples"
                                  data-id="0">{{$block->seotext}}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <input class="form-control string" type="hidden" value="{{time()}}"
           data-name="last_modified" data-type="string" data-block="examples" data-id="0">

@endsection