<div class="form-group">
    <label>{{ !empty($title) ? $title : 'Целое число' }}</label>
    <input class="form-control int {{ $class }}"
           type="number"
           step="{{ !empty($step) ? $step : '0.1' }}"
           value="{{ $block[$field_name] }}"
           data-name="{{ $field_name }}"
           data-type="int"
           data-block="{{ $block->name }}"
           data-id="{{ $block->getType()->fieldExist('id') ? $block->id : '0' }}">
</div>
