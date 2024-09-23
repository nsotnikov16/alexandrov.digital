<section class="section lead" id="lead-main">
    <div class="container">
        <div class="lead__wrapper">
            <div class="lead__left">
                <h2 class="section__title">Давайте начнем работать прямо сейчас</h2>
                <div class="lead__man">
                    <img class="lead__man-photo" src="<?= ASSETS_PATH ?>images/photo.webp" alt="Дмитрий, ваш интернет-маркетолог" />
                    <div class="lead__man-info">
                        <p class="lead__man-name">Дмитрий, ваш интернет-маркетолог</p>
                        <p class="lead__man-quote">Отвечу на все ваши вопросы, обсудим условия и необходимые работы по вашему проекту</p>
                    </div>
                </div>
            </div>
            <div class="lead__right">
                <form class="form">
                    <div class="form__rows">
                        <div class="form__row">
                            <input name="name" type="text" class="form__field" placeholder="Ваше имя" minlength="2" maxlength="50" required autocomplete="off">
                        </div>
                        <div class="form__row">
                            <input name="phone" type="tel" class="form__field" placeholder="Телефон" minlength="18" maxlength="18" required autocomplete="off">
                        </div>
                        <div class="form__row">
                            <textarea name="question" class="form__field" placeholder="Ваш вопрос" autocomplete="off"></textarea>
                        </div>
                    </div>
                    <div class="form__agree">
                        <input type="checkbox" name="agree" value="Y" checked>
                        <label>Соглашаюсь <a href="#">с пользовательским соглашением</a></label>
                    </div>
                    <button class="form__button btn btn_color">Получить консультацию</button>
                </form>
            </div>
        </div>
    </div>
</section>