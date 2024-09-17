<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/dev/tools/core.php';
?>
<?php getHeader(); ?>
<?php view('hero/inner', [
    'title' => '<span class="color">Разработка сайтов</span><br> в Сургуте',
    'subtitle' => 'Разработка сайтов с учётом требований поисковых систем. Подберём оптимальное решение под ваши задачи: лендинг для быстрого старта, или многостраничный сайт с интеграциями со сложными сторонними системами.',
    'imgSrc' => ASSETS_PATH . 'images/hero/dev.svg',
    'imgAlt' => 'Разработка сайтов в Сургуте',
    'imgClass' => 'hero__img_dev'
]) ?>
<?php view('info', [
    'title' => '<span class="color">Особенности</span> нашего подхода к разработке сайтов',
    'list' => [
        [
            'img' => ASSETS_PATH . 'images/info/dev/1.svg',
            'title' => 'Учёт требований поисковых систем',
            'preview' => 'Хотите, чтобы ваш сайт после разработки ранжировался в поисковых системах?',
            'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis officia labore et, sunt consequuntur repudiandae cupiditate facilis nam ipsam neque.'
        ],
        [
            'img' => ASSETS_PATH . 'images/info/dev/2.svg',
            'title' => 'Подключаем к работе маркетолога',
            'preview' => 'Маркетолог поможет сформировать чёткое, понятное предложение на сайте',
            'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis officia labore et, sunt consequuntur repudiandae cupiditate facilis nam ipsam neque.'
        ],
        [
            'img' => ASSETS_PATH . 'images/info/dev/3.svg',
            'title' => 'Прорабатываем UX при создании сайта',
            'preview' => 'UX - важный параметр, который влияет на конверсию сайта. Если ваш сайт красивый, яркий, но при этом неудобный - им не будут пользоваться.',
            'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis officia labore et, sunt consequuntur repudiandae cupiditate facilis nam ipsam neque.'
        ],
        [
            'img' => ASSETS_PATH . 'images/info/dev/4.svg',
            'title' => 'Проектируем структуру сайта <br>
            на основании спроса',
            'preview' => 'При разработке сайта мы опираемся на данные пользовательского спроса, 
            а не на «внутреннее ощущение»',
            'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis officia labore et, sunt consequuntur repudiandae cupiditate facilis nam ipsam neque.'
        ],
    ]
]) ?>
<?php view('promo', [
    'title' => 'Мы делаем сайты, которые приносят пользу для ваших клиентов и для вас',
    'subtitle' => 'Сайт — это инструмент продаж, он должен решать задачи пользователей. <br>
    Если он закрывает потребность пользователя, значит у вас будут заказывать. <br>
    Это главный принцип, которым мы руководствуемся при создании сайтов.',
    'class' => 'promo_dev'
]) ?>
<?php view('services/development') ?>
<?php view('about', ['addSectionClass' => 'bg-2', 'addAboutClass' => 'about_dark']) ?>
<?php view('cases', ['addSectionClass' => 'bg-2']) ?>
<?php view('reviews') ?>
<?php view('lead/main') ?>
<?php getFooter();
