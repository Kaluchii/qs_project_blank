<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Элемент {{$item->sorter}}</h3>
        <button type="submit" class="btn btn-primary pull-right remove-flat-item" data-id="{{$item->id}}"
                data-block="items_list">Удалить</button>
    </div>


    <div class="box-body">
        <div class="form-group">
            <label>Изображение (215x215 пикселей)</label>
            <div class="dropzone">
                <div class="file-input">
                    <div class="file-preview">
                        <div class="input-group file-caption-main">
                            <div class="file-preview-frame">
                                <div class="kv-file-content">
                                    <img src="{{$item->img->link}}?{{$item->img->cache_index}}" class="kv-preview-data file-preview-image"
                                         title="{{$item->img->alt}}" alt="{{$item->img->alt}}">
                                </div>
                                <div class="file-thumbnail-footer">
                                    <div class="file-actions">
                                        <input type="text" class="form-control alt-text" data-block="items_list"
                                               data-type="images" data-id="{{$item->id}}" data-name="alt"
                                               value="{{$item->img->alt}}">
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group-btn">
                            <button type="button" title="Очистить выбранные файлы"
                                    class="btn btn-default fileinput-remove fileinput-remove-button"><i
                                    class="glyphicon glyphicon-trash"></i> <span class="hidden-xs">Очистить</span>
                            </button>
                            <button type="button" class="btn btn-default hide fileinput-cancel fileinput-cancel-button"><i
                                    class="glyphicon glyphicon-ban-circle"></i> <span class="hidden-xs">Cancel</span>
                            </button>
                            <div class="btn btn-primary btn-file">
                                <i class="glyphicon glyphicon-folder-open"></i>&nbsp;
                                <span class="hidden-xs">Выбрать изображение …</span>
                                <input type="file" class="form-control file"
                                       data-block="items_list"
                                       data-name="img"
                                       data-type="image"
                                       data-id="{{$item->id}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="form-group">
            <label>Строка</label>
            <input class="form-control string"
                   type="text"
                   value="{{$item->text}}"
                   data-name="text"
                   data-type="string"
                   data-block="items_list"
                   data-id="{{$item->id}}">
        </div>


        <div class="form-group">
            <label>Целое число</label>
            <input class="form-control int"
                   type="number"
                   value="{{$item->imposts_count}}"
                   data-name="imposts_count"
                   data-type="int"
                   data-block="items_list"
                   data-id="{{$item->id}}">
        </div>

        
        <div class="form-group">
            <label>Вещественное число</label>
            <input class="form-control float"
                   type="number"
                   value="{{$item->price}}"
                   data-name="price"
                   data-type="float"
                   data-block="items_list"
                   data-id="{{$item->id}}">
        </div>


        <div class="form-group">
            <label>Текст</label>
            <textarea class="form-control text textarea--small" data-reg="true"
                      data-name="text"
                      data-type="text"
                      data-block="items_list"
                      data-id="{{$item->id}}">{{$item->text}}</textarea>
        </div>


        <div class="form-group">
            <label>Текстовый редактор</label>
            <textarea class="form-control text-editor"
                      data-name="text"
                      data-type="text"
                      data-block="items_list"
                      data-id="{{$item->id}}">{{$item->text}}</textarea>
        </div>


        <div class="form-group">
            <label>Файл</label>
            <div class="dropzone">
                <div class="file-input">
                    <div class="file-preview">
                        <div class="input-group file-caption-main">
                            <div class="file-preview-frame">
                                <div class="kv-file-content">
                                    <p style="font-size: 120px;"><i class="fa fa-file-image-o"></i></p>
                                </div>
                                <div class="file-thumbnail-footer">
                                    <div class="file-actions">
                                        <input type="text"
                                               class="form-control title"
                                               data-block="items_list"
                                               data-name="title"
                                               data-type="file"
                                               value="{{$item->file->title}}"
                                               data-id="{{$item->id}}"
                                               placeholder="Имя файла при скачивании">
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="input-group-btn">
                <button type="button" title="Очистить выбранные файлы" class="btn btn-default fileinput-remove fileinput-remove-button"><i class="glyphicon glyphicon-trash"></i>  <span class="hidden-xs">Удалить</span></button>
                <button type="button" title="Прервать текущую загрузку" class="btn btn-default hide fileinput-cancel fileinput-cancel-button"><i class="glyphicon glyphicon-ban-circle"></i>  <span class="hidden-xs">Отмена</span></button>
                <div class="btn btn-primary btn-file">
                    <i class="glyphicon glyphicon-folder-open"></i>&nbsp;
                    <span class="hidden-xs">Выбрать …</span>
                    <input type="file" class="form-control files"
                           data-block="items_list"
                           data-name="file"
                           data-type="file"
                           data-id="{{$item->id}}">
                </div>
            </div>
        </div>


        <div class="col-xs-1 no-padding">
            <div class="form-group">
                <label>Позиция</label>
                <input type="number" class="form-control string"
                       data-id="{{$item->id}}"
                       data-block="items_list"
                       data-name="sorter"
                       value="{{$item->sorter}}">
            </div>
        </div>
    </div>
</div>