<div class="form-group">
    <label>{{ !empty($title) ? $title : 'Вещественное число' }}</label>
    <input class="form-control float {{ !empty($class) ? $class : '' }}"
           type="number"
           step="{{ !empty($step) ? $step : '0.1' }}"
           @if(!empty($max))
           max="{{ $max }}"
           @endif
           @if(!empty($min))
           min="{{ $min }}"
           @endif
           value="{{ $block->$field_name }}"
           data-name="{{ $field_name }}"
           data-type="float"
           data-block="{{ $block->name }}"
           data-id="{{ $block->getType()->fieldExist('id') ? $block->id : '0' }}">
</div>
