<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Элемент №{{ $block->sorter }}</h3>
        <button type="submit" class="btn btn-primary pull-right remove-flat-item" data-id="{{ $block->id }}"
                data-block="{{ $block->name }}">Удалить</button>
    </div>


    <div class="box-body">

        @include('back.tpls.string', [
        'title' => 'Строка',
        'block' => $block,
        'field_name' => 'string'
        ])

        @include('back.tpls.int', [
        'title' => 'Целое число',
        'block' => $block,
        'field_name' => 'count',
        'max' => 10,
        'min' => 0,
        'step' => '2'
        ])

        @include('back.tpls.float', [
        'title' => 'Вещественное число',
        'block' => $block,
        'field_name' => 'price',
        'max' => 3.5,
        'min' => 0.1
        ])

        @include('back.tpls.text', [
        'title' => 'Текст',
        'block' => $block,
        'field_name' => 'text',
        'br_replace' => true
        ])

        @include('back.tpls.texteditor', [
        'title' => 'Текстовый редактор',
        'block' => $block,
        'field_name' => 'text'
        ])

        @include('back.tpls.file', [
        'title' => 'Файл',
        'block' => $block,
        'field_name' => 'file'
        ])

        @include('back.tpls.image', [
        'title' => 'Изображение (215x215 пикселей)',
        'block' => $block,
        'field_name' => 'img'
        ])


        <div class="col-xs-1 no-padding">
            @include('back.tpls.int', [
            'title' => 'Позиция',
            'block' => $block,
            'field_name' => 'sorter'
            ])
        </div>
    </div>
</div>