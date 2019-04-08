<div class="white-popup mfp-with-anim mfp-hide js_form_id" id="example_form">
    <h4 class="white-popup__title">Получить предложение</h4>
    <form novalidate class="white-popup__form feedback-form">
        {{--Передача Названия формы--}}
        <input type="hidden" name="form" class="js_form_input" value="example_form">

        <div class="feedback-form__input-wrap">
            <div class="feedback-form__validation-wrap feedback-input">
                <input type="text" name="client_name" class="feedback-input__field js_form_input" required placeholder="Ваше имя">
                <div class="feedback-input__tooltip-wrap"><p class="feedback-input__tooltip">Как к вам обращаться</p></div>
            </div>
        </div>

        <div class="feedback-form__input-wrap">
            <div class="feedback-form__validation-wrap feedback-input">
                <input type="tel" name="client_phone" class="feedback-input__field js_form_input" placeholder="+7 (...) ... .. .." data-require="true" maxlength="25" data-mask="+7 (000) 000-00-00">
                <div class="feedback-input__tooltip-wrap"><p class="feedback-input__tooltip">Телефонный номер для связи</p></div>
            </div>
        </div>

        <div class="feedback-form__input-wrap feedback-form__input-wrap--btn">
            <input type="submit" value="Заказать звонок" class="feedback-form__btn button js_send_form">
        </div>
    </form>
</div>