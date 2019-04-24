@foreach($blocks as $item)
    <input class="form-control string" type="hidden" value="{{time()}}"
           data-name="last_modified" data-type="string" data-block="{{$item}}" data-id="{{ !empty($id) ? $id : '0' }}">
@endforeach
