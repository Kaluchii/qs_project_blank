<div class="form-group">
    <label>{{ !empty($title) ? $title : 'Целое число' }}</label>
    <input class="form-control int {{ !empty($class) ? $class : '' }}"
           type="number"
           step="{{ !empty($step) ? $step : '1' }}"
           @if(!empty($max))
           max="{{ $max }}"
           @endif
           @if(!empty($min))
           min="{{ $min }}"
           @endif
           value="{{ $block->$field_name }}"
           data-name="{{ $field_name }}"
           data-type="int"
           data-block="{{ $block->name }}"
           data-id="{{ $block->getType()->fieldExist('id') ? $block->id : '0' }}">
</div>
