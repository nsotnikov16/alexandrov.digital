if (typeof AOS !== 'undefined') {
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

    // if (typeof window.noChangeBackround === 'undefined') {
    //     html.classList.remove('bg-2');
    //     if (scrollProgress >= 15) html.classList.add('bg-2');
    // }


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


function setFormLogic({ type, loadingText, url, func }) {
    if (!type) return;
    const form = document.querySelector(`[data-form-${type}]`);
    if (!form) return
    const success = document.querySelector(`[data-${type}-success]`);
    const failed = document.querySelector(`[data-${type}-failed]`);
    const formFields = Array.from(form.querySelectorAll('input:not([type="hidden"]), textarea'));

    if (formFields.length) {
        formFields.forEach(item => {
            item.addEventListener('input', () => item.classList.add('form__validity'));
        })
    }

    if (!success) console.error('Отсутствует блок успешного ответа для ' + type);
    if (!failed) console.error('Отсутствует блок ошибки для ' + type);

    if (form && success && failed) {
        const btn = form.querySelector('.form__btn');
        const btnDefaultText = btn.textContent;
        if (typeof func === 'function') func(form, success, failed, formFields)
        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            try {
                btn.textContent = loadingText ?? 'Отправляем...';
                failed.classList.add('d-none');
                const result = await request('POST', url, new FormData(e.target));
                if (!result.status) throw new Error('');
                success.classList.remove('d-none');
                form.reset();
                Array.from(form.elements).forEach(item => item.classList.remove('form__validity'));
            } catch (error) {
                failed.classList.remove('d-none');
            } finally {
                arrPopups[`form-${type}-result`].open();
                btn.textContent = btnDefaultText;
            }
        })
    }
}

setFormLogic({ type: 'project', loadingText: 'Отправляем...', url: '/dev/api/project.php' });
setFormLogic(
    {
        type: 'consultant',
        loadingText: 'Отправляем...',
        url: '/dev/api/consultant.php',
        func: (form, success, failed, formFields) => {
            const arrRadio = formFields.filter(f => f.name === 'method' && f.value);
            arrRadio.forEach((item, index) => {
                item.addEventListener('change', () => {
                    arrRadio.forEach((itemB, indexB) => {
                        const needInput = formFields.find(f => f.name == itemB.value);
                        needInput.required = item.checked;
                        if (index !== indexB) {
                            itemB.checked = false;
                            needInput.required = false;
                        }
                        setRequiredLabel(needInput);
                    })
                })
            })
        }
    }
);

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