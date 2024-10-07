if (typeof AOS !== 'undefined') {
    const sectionContainers = document.querySelectorAll('section .container')
    if (sectionContainers) sectionContainers.forEach(item => item.setAttribute('data-aos', 'fade-up'))
    AOS.init();
}

if (typeof Fancybox !== 'undefined') {
    Fancybox.bind("[data-fancybox]", {
        // Your custom options
    });
}


const html = document.querySelector('html');
const header = document.querySelector('.header');
const headerMobBtn = document.querySelector('.header__mob-btn')
let prevScroll = window.scrollY;

if (header && headerMobBtn) {
    const headerNavLinks = header.querySelectorAll('.header__nav-link');
    if (headerNavLinks.length) {
        headerNavLinks.forEach(item => {
            item.addEventListener('click', () => header.classList.toggle('header_menu'));
        })
    }
    headerMobBtn.addEventListener('click', () => header.classList.toggle('header_menu'));
}

// Popups
class Popup {
    constructor(popupElement) {
        this.popupElement = popupElement;
        this.closeButton = this.popupElement.querySelector('.popup__close');
        this._handleEscClose = this._handleEscClose.bind(this)
        this.openingLinks = document.querySelectorAll(`[data-pointer="${this.popupElement.id}"]`)
        this.setEventListeners()
    }

    open() {
        document.body.style.overflow = "hidden";
        this.popupElement.classList.add('popup_opened')
        document.addEventListener('keydown', this._handleEscClose);
    }

    close() {
        this.popupElement.classList.remove('popup_opened');
        document.body.style.overflow = "visible";
        document.removeEventListener('keydown', this._handleEscClose);
    }

    _handleEscClose(evt) {
        if (evt.keyCode === 27) this.close();
    }

    _handleOverlayClick(evt) {
        if (evt.target === evt.currentTarget) this.close();
    }

    setEventListeners() {
        this.openingLinks.forEach(link => link.addEventListener('click', (e) => {
            e.preventDefault();
            this.open(e.currentTarget)
        }))
        this.closeButton.addEventListener('click', () => this.close());
        this.popupElement.addEventListener('click', this._handleOverlayClick.bind(this));
    }
}

const popups = document.querySelectorAll('.popup')
let arrPopups = {}
document.addEventListener('DOMContentLoaded', () => {
    if (popups.length > 0) popups.forEach(item => {
        const popup = new Popup(item)
        arrPopups[item.id] = popup
    })
})

function handlerScroll() {
    const contentHeight = document.documentElement.scrollHeight - window.innerHeight;
    const scrollProgress = (window.scrollY / contentHeight) * 100;
    if (header) {
        header.classList.remove('header_scrolled');
        header.classList.remove('header_hide');
        if (scrollProgress >= 3) header.classList.add('header_scrolled');
        if (window.scrollY > prevScroll && window.innerWidth > 991) header.classList.add('header_hide');
    }

    prevScroll = window.scrollY;
}


function lazyLoad() {
    const lazyImages = document.querySelectorAll('[data-lazy-src]')
    if (!lazyImages.length) return;
    lazyImages.forEach(img => {
        //img.setAttribute('src', '/dev/assets/images/load.gif');
        function showImg() {
            const { top } = img.getBoundingClientRect();
            if (top >= window.innerHeight - 100) return;
            const src = img.getAttribute('data-lazy-src');
            if (!src) return;
            img.setAttribute('src', src)
            img.removeAttribute('data-lazy-src');
            document.removeEventListener('scroll', showImg);
        }

        showImg()
        window.addEventListener('scroll', showImg)
    })
}

lazyLoad();

window.addEventListener('scroll', handlerScroll);

/* Маска */
window.addEventListener("DOMContentLoaded", function () {
    [].forEach.call(document.querySelectorAll('.tel'), function (input) {
        var keyCode;

        function mask(event) {
            event.keyCode && (keyCode = event.keyCode);
            var pos = this.selectionStart;
            if (pos < 3) event.preventDefault();
            var matrix = "+7 (___) ___-__-__",
                i = 0,
                def = matrix.replace(/\D/g, ""),
                val = this.value.replace(/\D/g, ""),
                new_value = matrix.replace(/[_\d]/g, function (a) {
                    return i < val.length ? val.charAt(i++) || def.charAt(i) : a
                });
            i = new_value.indexOf("_");
            if (i != -1) {
                i < 5 && (i = 3);
                new_value = new_value.slice(0, i)
            }
            var reg = matrix.substr(0, this.value.length).replace(/_+/g,
                function (a) {
                    return "\\d{1," + a.length + "}"
                }).replace(/[+()]/g, "\\$&");
            reg = new RegExp("^" + reg + "$");
            if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) this.value = new_value;
            if (event.type == "blur" && this.value.length < 5) this.value = ""
            if (!this.value) this.classList.remove('no-empty')
        }

        input.addEventListener("input", mask, false);
        input.addEventListener("focus", mask, false);
        input.addEventListener("blur", mask, false);
        input.addEventListener("keydown", mask, false)
    });
});


const btnUp = {
    el: document.querySelector('.btn-up'),
    show() {
        // удалим у кнопки класс btn-up_hide
        this.el.classList.remove('btn-up_hide');
    },
    hide() {
        // добавим к кнопке класс btn-up_hide
        this.el.classList.add('btn-up_hide');
    },
    addEventListener() {
        if (!this.el) return
        // при прокрутке содержимого страницы
        window.addEventListener('scroll', () => {
            // определяем величину прокрутки
            const scrollY = window.scrollY || document.documentElement.scrollTop;
            // если страница прокручена больше чем на 400px, то делаем кнопку видимой, иначе скрываем
            scrollY > 400 ? this.show() : this.hide();
        });
        // при нажатии на кнопку .btn-up
        document.querySelector('.btn-up').onclick = () => {
            // переместим в начало страницы
            window.scrollTo({
                top: 0,
                left: 0,
                behavior: 'smooth'
            });
        }
    }
}

btnUp.addEventListener();

/**
 * Общий метод для работы с запросами
 * @param {string} method
 * @param {string} url
 * @param {object} data
 * @returns {object}
 */
async function request(method = 'GET', url, data) {
    let result = {};
    try {
        if (!url) throw new Error('Отсутствует url адрес');
        const body = data instanceof FormData ? data : JSON.stringify(data);

        const options = {
            method,
            ...method != 'GET' && data ? { body } : ''
        }

        if (data instanceof FormData === false) {
            options.headers = {
                'Content-Type': 'application/json'
            }
        }

        const response = await fetch(url, options);

        result = await response.json();

    } catch (error) {
        result = { success: false, error: error.message };
    }

    return result;
}


function setFormLogic({ type, loadingText, url }) {
    if (!type) return;
    const form = document.querySelector(`[data-form-${type}]`);
    if (!form) return;

    const formFields = Array.from(form.querySelectorAll('input:not([type="hidden"]), textarea'));

    if (formFields.length) {
        formFields.forEach(item => {
            item.addEventListener('input', () => {
                item.classList.add('form__validity');
                item.value ? item.classList.add('no-empty') : item.classList.remove('no-empty')
            });
        })
    }

    const btn = form.querySelector('.form__button');
    const btnDefaultText = btn.textContent;

    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        try {
            btn.disabled = true;
            btn.textContent = loadingText ?? 'Отправляем...';
            const result = await request('POST', url, new FormData(e.target));
            if (!result.status) throw new Error('');
            form.reset();
            formFields.forEach(item => {
                item.classList.remove('form__validity');
                item.classList.remove('no-empty')
            });
            window.location.href = '/thanks'
        } catch (error) {
            alert('Произошла ошибка при отправке формы! Попробуйте еще раз. Если ошибка повториться снова, сообщите нам!')
        } finally {
            btn.textContent = btnDefaultText;
            btn.disabled = false;
        }
    })
}

setFormLogic({ type: 'lead', loadingText: 'Отправляем...', url: '/dev/api/lead.php' });

const setRequiredLabel = (input) => {
    const label = input.labels?.[0]
    if (!label) return;
    const reqElement = label.querySelector('[data-required]');
    input.required ? (reqElement.textContent) = '*' : (reqElement.textContent = '')
}


/* Спойлеры */
const spoilers = document.querySelectorAll('.spoiler')
if (spoilers.length > 0) {
    spoilers.forEach(spoiler => {
        const top = spoiler.querySelector('.spoiler__top')
        if (top) top.addEventListener('click', () => spoiler.classList.toggle('spoiler_open'))
    })
}

const reviews = Array.from(document.querySelectorAll('.review'));
const reviewsAll = document.querySelector('.reviews__all');
if (reviews.length && reviewsAll) {
    const isReviewsPage = window.location.pathname === '/reviews/';
    const maxHeightReview = 120;
    const classHidden = 'review__text_hidden'
    reviews.forEach((item, index) => {
        let condition = index > 2
        if (window.innerWidth > 767 && window.innerWidth <= 1150) condition = index > 1
        if (window.innerWidth <= 767) condition = index > 0;
        if (isReviewsPage) condition = false;
        condition ? item.classList.add('d-none') : ''
        const textBlock = item.querySelector('.review__text');
        if (textBlock.clientHeight > maxHeightReview) {
            textBlock.classList.add(classHidden);
            const button = document.createElement('button')
            button.classList.add('review__full');
            button.textContent = 'Читать еще';
            textBlock.insertAdjacentElement('afterend', button);
            button.addEventListener('click', () => {
                if (textBlock.classList.contains(classHidden)) {
                    button.textContent = 'Скрыть'
                    textBlock.classList.remove(classHidden)
                } else {
                    button.textContent = 'Читать еще';
                    textBlock.classList.add(classHidden)
                }
            })
        }
    })

    if (isReviewsPage) {
        reviewsAll.remove()
    } else {
        let showAll = false;
        const startText = reviewsAll.textContent;
        const hiddenReviews = reviews.filter(item => item.classList.contains('d-none'));
        reviewsAll.addEventListener('click', () => {
            if (!showAll) {
                hiddenReviews.forEach(item => item.classList.remove('d-none'));
                reviewsAll.textContent = 'Скрыть';
                showAll = true;
            } else {
                hiddenReviews.forEach(item => item.classList.add('d-none'));
                reviewsAll.textContent = startText;
                showAll = false;
            }
        })
    }
}

const infoFullItems = document.querySelectorAll('[data-info-full]');
if (infoFullItems.length) {
    const classFull = 'info__item-text_full';
    infoFullItems.forEach(item => {
        const parent = item.closest('.info__item-text');
        item.addEventListener('click', () => {
            parent.classList.toggle(classFull);
            item.textContent = parent.classList.contains(classFull) ? 'Cкрыть' : 'Подробнее'
        })
    })
}
const workQuestion = document.querySelector('.work_question');
if (workQuestion) {
    let scale;
    const scrollWorkQuestion = () => {
        const elementTop = workQuestion.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;
        const elementHeight = workQuestion.offsetHeight;

        // Определяем процент, на сколько элемент виден
        const start = windowHeight * 0.8; // Начало изменения scale (например, когда элемент на 80% ниже верхней границы экрана)
        const end = windowHeight * 0.2; // Конец изменения scale (когда элемент на 20% ниже верхней границы экрана)

        // Рассчитываем, где находится элемент относительно окна
        if (elementTop < start && elementTop + elementHeight > end) {
            const progress = (start - elementTop) / (start - end); // Процент, на сколько элемент виден
            const scaleValue = scale = Math.min(1, 0.5 + (progress * 0.5)); // scale изменяется от 0.5 до 1
            workQuestion.style.transform = `scale(${scaleValue})`;
        }
        if (scale >= 1) document.removeEventListener('scroll', scrollWorkQuestion);
    }
    document.addEventListener('scroll', scrollWorkQuestion);
}

function handleScrollOnce(element, callback) {
    let hasBeenCalled = false;

    function checkVisibility() {
        const rect = element.getBoundingClientRect();
        const isVisible = rect.top >= 0 && rect.bottom <= window.innerHeight + 300;

        if (isVisible && !hasBeenCalled) {
            if (typeof callback == 'function') callback()
            hasBeenCalled = true;
            window.removeEventListener('scroll', checkVisibility); // Убираем слушатель после вызова
        }
    }

    window.addEventListener('scroll', checkVisibility);
    checkVisibility();
}

// Функция для анимации счетчика, которая изменяет только числа
function animateCounter(counterElement) {
    const targetText = counterElement.getAttribute('data-target');
    const targetNumber = parseFloat(targetText.match(/-?\d+\.?\d*/)); // Извлекаем числовую часть
    const suffix = targetText.replace(/-?\d+\.?\d*/, ''); // Извлекаем текстовую часть (например, %, + и т.д.)

    const increment = targetNumber / 70; // Настройка скорости анимации
    let currentValue = 0;

    // Функция обновления числа
    function updateCounter() {
        currentValue += increment;

        if ((increment > 0 && currentValue < targetNumber) || (increment < 0 && currentValue > targetNumber)) {
            counterElement.innerText = `${Math.ceil(currentValue)}${suffix}`;
            requestAnimationFrame(updateCounter);
        } else {
            counterElement.innerText = `${targetNumber}${suffix}`; // Устанавливаем конечное значение с текстом
        }
    }

    updateCounter();
}

const counters = document.querySelectorAll('.counter');
if (counters.length) counters.forEach(counter => animateCounter(counter));

// Функция для создания эффекта перетасовки текста
function shuffleTextEffect(element, targetWord) {
    const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_+{}:"<>?|[];,./~'; // Набор случайных символов
    let iterations = 0;
    const intervalSpeed = 50; // Скорость смены символов

    const interval = setInterval(() => {
        const text = targetWord.split('').map((letter, index) => {
            if (index < iterations) {
                return letter; // Когда доходим до нужной буквы, оставляем её
            }
            return characters[Math.floor(Math.random() * characters.length)]; // Показ случайного символа
        }).join('');

        element.innerText = text;

        if (iterations >= targetWord.length) {
            clearInterval(interval); // Останавливаем анимацию, когда все буквы правильные
        }

        iterations += 1 / 3; // Количество итераций для постепенной замены символов (можно настроить)
    }, intervalSpeed);
}

// Применение эффекта на элемент
const shuffleTextElements = document.querySelectorAll('.shuffle-text');
if (shuffleTextElements.length) {
    shuffleTextElements.forEach(shuffleTextElement => {
        const targetWord = shuffleTextElement.getAttribute('data-word');
        shuffleTextEffect(shuffleTextElement, targetWord);
    })
}


const cursorEffectElements = document.querySelectorAll('.cursor-effect');
if (cursorEffectElements.length) {
    document.body.insertAdjacentHTML('beforeend', `<div class="cursor-dot"></div><div class="cursor-highlight"></div>`);
    // Элементы для точки и подсветки
    const cursorDot = document.querySelector('.cursor-dot');
    const cursorHighlight = document.querySelector('.cursor-highlight');

    // Обновляем позицию точки и подсветки при движении мыши
    document.addEventListener('mousemove', function (e) {
        if (e.target.closest('.cursor-effect')) {
            cursorDot.classList.remove('d-none');
            cursorHighlight.classList.remove('d-none');
            cursorDot.style.top = e.clientY + 'px';
            cursorDot.style.left = e.clientX + 'px';
            cursorHighlight.style.top = e.clientY + 'px';
            cursorHighlight.style.left = e.clientX + 'px';
        } else {
            cursorDot.classList.add('d-none');
            cursorHighlight.classList.add('d-none');
        }
    });

    cursorEffectElements.forEach(item => {
        item.addEventListener('mouseenter', () => {
            cursorHighlight.style.width = '150px';
            cursorHighlight.style.height = '150px';
        });

        item.addEventListener('mouseleave', () => {
            cursorHighlight.style.width = '100px';
            cursorHighlight.style.height = '100px';
        });
    })
}


function videoHandler(video) {
    if (video.paused) {
        video.setAttribute('controls', '');
        setTimeout(() => video.play(), 500)
    } else {
        video.pause();
        video.removeAttribute('controls');
    }
}