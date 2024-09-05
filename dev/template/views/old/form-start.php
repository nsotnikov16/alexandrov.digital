<section class="section" style="padding-top: 0;">
    <div class="container">

        <form class="form form_start" data-form-project>
            <div class="form__wrapper">
                <div class="form__row">
                    <label class="form__label">Как Вас зовут? *</label>
                    <input class="form__input" type="text" name="name" placeholder="Введите ваше имя" minlength="2" maxlength="30" required autocomplete="off">
                </div>
                <div class="form__row">
                    <label class="form__label">Ваш номер телефона *</label>
                    <input class="form__input tel" type="text" pattern="^\+7 \(\d{3}\) \d{3}-\d{2}-\d{2}$" name="phone" minlength="18" placeholder="+7 (800) 555-35-35" autocomplete="off" title="Формат: +7 (800) 555-35-35" maxlength="18" required>
                </div>
                <div class="form__row">
                    <label class="form__label">Ваш Email</label>
                    <input class="form__input" type="email" name="email" placeholder="example@example.ru" minlength="2" maxlength="80" autocomplete="off">
                </div>
                <div class="form__row">
                    <label class="form__label">Опишите Ваш проект</label>
                    <textarea name="description" class="form__textarea" maxlength="300" autocomplete="off"></textarea>
                </div>
                <span>* - обязательные поля к заполнению</span>
                <div class="form__bottom">
                    <p class="form__policy">Нажимая кнопку "Отправить", Вы соглашаетесь с <br><a target="_blank" href="/privacy-policy/">Политикой в отношении обработки персональных данных</a></p>
                    <button class="btn form__btn">Отправить</button>
                </div>

            </div>
        </form>
    </div>
</section>

<div class="popup popup_result" id="form-project-result">
    <div class="popup__container">
        <div class="popup__content">
            <div data-project-failed class="content d-none">
                <h3>Что-то пошло не так, попробуйте снова</h3>
                <p>Если ошибка повторится, сообщите нам по email <a href="mailto:<?= EMAIL ?>"><?= EMAIL?></a></p>
            </div>
            <div data-project-success class="content d-none">
                <h2 class="section__title">Спасибо за обращение!</h2>
                <p>Наша команда свяжется с Вами в ближайшее время 🙌</p>
            </div>
        </div>
        <div class="popup__close">&#x2715;</div>
    </div>
</div>