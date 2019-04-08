<tr role="row" class="odd" data-id="{{$item->id}}">

    {{-- ID  --}}
    <td>{{$item->id}}</td>

    {{-- Название  --}}
    <td class="sorting_1">
        <a href="examples/{{$item->id}}" class="">{{$item->category_name}}</a>
    </td>

    {{-- Дата последнего редактирования --}}
    <td> {{$item->getField('updated_at')->getItem()->getDate()}} </td>

    {{-- Опубликовано  --}}
    <td data-order="{{$item->show}}">
        <select class="form-control group-show"
                data-id="{{$item->id}}"
                data-block="examples_categories"
                data-name="show">
            @if($item->show)
                <option value="false">Не опубликовано</option>
                <option value="true" selected>Опубликовано</option>
            @else
                <option value="false" selected>Не опубликовано</option>
                <option value="true">Опубликовано</option>
            @endif
        </select>
    </td>

    {{-- Сортировака --}}
    <td data-order="{{$item->sorter}}">
        <input type="number" class="form-control group-sorter"
               data-id="{{$item->id}}"
               data-block="examples_categories"
               data-name="sorter"
               value="{{$item->sorter}}">
    </td>

    {{-- Удаления  --}}
    <td>
        <button type="button" class="btn btn-block btn-primary group-remove-item"
                data-id="{{$item->id}}" data-block="examples_categories">Удалить</button>
    </td>
</tr>