<?php
$breadcrumbs = ['/advertising/' => 'Контекстная реклама'];
require_once $_SERVER['DOCUMENT_ROOT'] . '/dev/tools/core.php';
?>
<?php getHeader(); ?>
<?php view('hero/inner', [
    'title' => '<span class="color">Настройка и ведение контекстной <span class="shuffle-text" data-word="рекламы">рекламы</span></span><br> в Сургуте',
    'subtitle' => 'Зарабатывайте больше, с помощью грамотно настроенной рекламной кампании. Основываюсь на бизнес-показателях, анализирую эффективность рекламы в денежном эквиваленте.',
    'imgSrc' => ASSETS_PATH . 'images/hero/adv.svg',
    'imgAlt' => 'Настройка и ведение контекстной рекламы в Сургуте',
    'imgClass' => 'hero__img_adv',
    'addClass' => 'hero_adv'
]) ?>
<?php view('info', [
    'title' => '<span class="color">Особенности</span> моего подхода к ведению рекламных кампаний',
    'list' => [
        [
            'img' => ASSETS_PATH . 'images/info/adv/1.svg',
            'title' => 'Комплексный подход',
            'preview' => 'Контекстная реклама приводит клиентов на сайт, но конечная продажа происходит на сайте.',
            'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis officia labore et, sunt consequuntur repudiandae cupiditate facilis nam ipsam neque.'
        ],
        [
            'img' => ASSETS_PATH . 'images/info/adv/2.svg',
            'title' => 'Профессиональная аналитика в режиме реального времени',
            'preview' => '
            <img src="/dev/assets/images/info/adv/analitics.webp" /><br><br>
            Ищу оптимальные рекламные связки для вашего продукта, анализирую аудитории рекламной кампании: отключаю неэффективные показы, масштабирую эффективные.
            ',
            'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis officia labore et, sunt consequuntur repudiandae cupiditate facilis nam ipsam neque.'
        ],
        [
            'img' => ASSETS_PATH . 'images/info/adv/3.svg',
            'title' => 'Оптимизация рекламного бюджета',
            'preview' => 'Ваш бюджет будет распределяться только на эффективные ключевые фразы и сегменты аудиторий.',
            'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis officia labore et, sunt consequuntur repudiandae cupiditate facilis nam ipsam neque.'
        ],
        [
            'img' => ASSETS_PATH . 'images/info/adv/4.svg',
            'title' => 'Техническая экспертиза',
            'preview' => 'Обладаю навыками, которые позволяют настраивать и оптимизировать рекламные кампании на продвинутом уровне, используя скрипты и автоматизацию процессов.',
            'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis officia labore et, sunt consequuntur repudiandae cupiditate facilis nam ipsam neque.'
        ],
        [
            'img' => ASSETS_PATH . 'images/info/adv/5.svg',
            'title' => 'Быстрая реакция на изменения',
            'preview' => 'Оперативно реагирую на изменения в поведении пользователей, конкурентов и изменениях в настройках рекламных систем, чтобы ваша реклама всегда оставалась актуальной и эффективной.',
        ],
        [
            'img' => ASSETS_PATH . 'images/info/adv/6.svg',
            'title' => 'Персонализированные стратегии',
            'preview' => 'Разрабатываю индивидуальные стратегии для каждой рекламной кампании, учитывая специфику вашего бизнеса.',
            'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis officia labore et, sunt consequuntur repudiandae cupiditate facilis nam ipsam neque.'
        ],
    ]
]) ?>
<?php view('promo', [
    'title' => 'Во всех остальных случаях буду рад вам помочь ',
    'subtitle' => 'Оставляйте заявку, и мы вместе подумаем<br> над реализацией ваших целей.',
    'class' => 'promo_adv'
]) ?>
<section class="section">
    <div class="container">
        <h2 class="section__title"><span class="color">Ответьте на 7 вопросов</span>, и получите приблизительный прогноз рекламного бюджета на ваши услуги</h2>
        <!-- Сюда код квиза -->
    </div>
</section>
<?php view('services/advertising') ?>
<?php view('price', ['list' => [
    ['name' => 'Аудит рекламной кампании', 'price' => 'от 3 000 ₽'],
    ['name' => 'Подключение сервиса отслеживания звонков', 'price' => 'от 5 000 ₽'],
    ['name' => 'UX/UI аудит и улучшение сайта', 'price' => 'от 15 000 ₽'],
    ['name' => 'Управление репутацией в интернете (ORM)', 'price' => 'от 10 000 ₽'],
    ['name' => 'Создание контента', 'price' => 'от 1 000 ₽'],
    ['name' => 'SEO-оптимизация', 'price' => 'от 25 000 ₽'],
]]) ?>
<? view('works', [
    'title' => '<span class="color">Какие работы я делаю</span> в рамках настройки и ведения контекстной рекламы',
    'list' => [
        [
            'name' => 'Анализ<br> конкурентов',
            'description' => 'Анализирую конкурентов в вашей тематике. Составляю матрицу их сильных сторон и сравниваю с нашим предложением. Совместно с вами вырабатываем оптимальное предложение, чтобы быть лучше конкурентов.'
        ],
        [
            'name' => 'Исследование вашей целевой аудитории',
            'description' => 'Определяю демографические характеристики вашей целевой аудитории (возраст, пол, местоположение). Выявляю их интересы и поведенческие характеристики, чтобы закрыть их потребности максимально полно в рамках нашего предложения.'
        ],
        [
            'name' => 'Настройка рекламной кампании',
            'description' => 'Включает в себя весь комплекс работ по созданию рекламы: разработка структуры рекламных кампаний, сбор ключевых запросов, минус-слов, создание объявлений, настройка ставок и т.д.'
        ],
        [
            'name' => 'Подключение и настройка веб-аналитики',
            'description' => 'Подключение и настройка Яндекс Метрики, настройка ключевых целей, отслеживание звонков, проведение A/B тестирования различных версий объявлений и посадочных страниц при необходимости. Подсчёт стоимости лида/заказа.'
        ],
        [
            'name' => 'Оптимизация ставок',
            'description' => 'Регулярная аналитика и корректировка ставок для фраз, исходя из их эффективности. Настройка и корректировка ставок по времени показа объявлений, устройствам и аудиториям. Тестирую различные уровни ставок и их влияние на конверсию.'
        ],
        [
            'name' => 'Составление понятных отчётов с помощью BI-инструментов',
            'description' => 'Делаю понятные отчёты с помощью Yandex Data Lens. Отчёты состоят из конкретных показателей и сегментов, с помощью которых можно анализировать рекламную кампанию, в том числе владельцу бизнеса. Никакой «воды».'
        ],
        [
            'name' => 'Базовый аудит сайта и проверка его УТП',
            'description' => 'Качество сайта напрямую влияет на процент заказов. Если ваше предложение невнятное или проигрывает предложениям конкурентов - реклама будет неэффективной, даже если она настроена верно. Поэтому анализ сайта - важная часть работы при разработке рекламной стратегии.'
        ],
        [
            'name' => 'Доработка и оптимизация рекламных кампаний',
            'description' => 'На протяжении всей работы ваши рекламные кампании дорабатываются и улучшаются. Мы можем тестировать настройки, находить эффективные связки, добавлять или уменьшать охваты показа рекламы. Цель - получать заявки по меньшей цене.'
        ],
    ]
]) ?>
<?php view('about', ['addAboutClass' => 'about_dark']) ?>
<?php view('cases') ?>
<?php view('reviews') ?>
<?php view('faq', [
    'list' => [
        [
            'question' => 'Даёте ли вы гарантии на достижение результата?',
            'answer' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis quos minus neque ex tempore, ad maxime alias doloremque adipisci repellendus!'
        ],
        [
            'question' => 'Как формируется цена на SEO-продвижение сайтов?',
            'answer' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis quos minus neque ex tempore, ad maxime alias doloremque adipisci repellendus!'
        ],
        [
            'question' => 'Какие сроки продвижения сайта?',
            'answer' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis quos minus neque ex tempore, ad maxime alias doloremque adipisci repellendus!'
        ],
    ]
]) ?>
<?php view('lead/main') ?>
<?php getFooter();
