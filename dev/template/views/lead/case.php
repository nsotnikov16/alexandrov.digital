<section class="section lead lead_case">
    <div class="container">
        <div class="lead__wrapper">
            <div class="lead__left">
                <h2 class="section__title lead__title">Хотите также или лучше?</h2>
                <form class="form">
                    <p class="form__text">Оставляйте заявку, и мы вместе подумаем
                        над реализацией ваших целей</p>
                    <div class="form__rows">
                        <div class="form__row">
                            <input name="name" type="text" class="form__field" placeholder="Ваше имя" minlength="2" maxlength="50" required autocomplete="off">
                            <input name="phone" type="tel" class="form__field" placeholder="Телефон" minlength="18" maxlength="18" required autocomplete="off">
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