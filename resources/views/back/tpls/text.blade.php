<div class="form-group">
    <label>{{ !empty($title) ? $title : 'Текстовое поле' }}</label>
    <textarea class="form-control text {{ $class }}" @if($br_replace) data-reg="true" @endif
              data-name="{{ $field_name }}"
              data-type="{{ $type or 'text' }}"
              data-block="{{ $block->name }}"
              data-id="{{ $block->getType()->fieldExist('id') ? $block->id : '0' }}">{{ $block[$field_name] }}</textarea>
</div>