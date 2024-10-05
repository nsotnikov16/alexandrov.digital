<section class="section lead lead_case">
    <div class="container">
        <div class="lead__wrapper">
            <h2 class="section__title lead__title pulse-text">Хотите также или лучше?</h2>
            <div class="lead__left">
                <form class="form" data-form-lead>
                    <p class="form__text">Оставляйте заявку, и мы вместе подумаем
                        над реализацией ваших целей</p>
                    <div class="form__rows form__rows_flex">
                        <div class="form__row">
                            <input name="name" type="text" class="form__field" minlength="2" maxlength="50" required autocomplete="off">
                            <label>Ваше имя</label>
                        </div>
                        <div class="form__row">
                            <input name="phone" type="tel" class="form__field tel" pattern="^\+7 \(\d{3}\) \d{3}-\d{2}-\d{2}$" minlength="18" maxlength="18" required autocomplete="off" title="Формат: +7 (800) 555-35-35">
                            <label>Телефон</label>
                        </div>
                    </div>
                    <div class="form__agree">
                        <input type="checkbox" name="agree" value="Y" checked>
                        <label>Соглашаюсь <a href="#">с пользовательским соглашением</a></label>
                    </div>
                    <button class="form__button btn btn_color">Отправить</button>
                </form>
            </div>
            <div class="lead__right">
                <div class="lead__man">
                    <img class="lead__man-photo" src="<?= ASSETS_PATH ?>images/photo.webp" alt="Дмитрий, ваш интернет-маркетолог" />
                    <div class="lead__man-info">
                        <p class="lead__man-name">Дмитрий Александров</p>
                        <p class="lead__man-quote">Специалист по интернет-маркетингу</p>
                    </div>
                </div>
                <? view('messengers', ['addClass' => 'lead__messengers']) ?>
            </div>
        </div>
    </div>
</section>