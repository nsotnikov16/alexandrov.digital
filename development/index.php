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
<?php view('price', ['list' => [
    ['name' => 'Разработка сайта на Tilda', 'price' => 'от 40 000 ₽'],
    ['name' => 'Разработка дизайна сайта', 'price' => 'от 40 000 ₽'],
    ['name' => 'Разработка сайта на 1С-Битрикс', 'price' => 'от 40 000 ₽'],
    ['name' => 'Проектирование структуры сайта', 'price' => 'от 15 000 ₽'],
    ['name' => 'Доработка сайтов', 'price' => 'от 3 000 ₽'],
    ['name' => 'Корректировка готовых сайтов', 'price' => 'от 4 000 ₽'],
]]) ?>
<? view('works', [
    'title' => '<span class="color">Какие работы мы делаем</span> в рамках разработки сайтов',
    'list' => [
        [
            'name' => 'Анализ<br> конкурентов',
            'description' => 'Нахожу самых сильных конкурентов в поисковой выдаче. Выделяю их слабые и сильные места. Лучшие решения внедряем на продвигаемый сайт.'
        ],
        [
            'name' => 'Внедрение семантического<br> ядра, структуры сайта',
            'description' => 'Соберу ключевые слова, которые эффективнее всего продвигать, исходя из частотности, интента запроса и конкурентности.'
        ],
        [
            'name' => 'Разработка новых страниц на сайт',
            'description' => 'Под целевой спрос создам продающие, удобные страницы, напишем текст, оформим УТП и оптимизируем их под поисковый спрос.'
        ],
        [
            'name' => 'Исправление технических ошибок',
            'description' => 'Выявим все технические ошибки, которые мешают сайту ранжироваться, устраним их, сделаем сайт понятным для поисковых систем.'
        ],
        [
            'name' => 'Улучшение поведенческих факторов и конверсии',
            'description' => 'Для успешного продвижения сайта важно, чтобы пользователи находили ответ на свой вопрос на сайте. Сделаем так, чтобы пользователи после вашего сайта не возвращались в поисковую выдачу и не уходили к конкурентам.'
        ],
        [
            'name' => 'Увеличиваем ссылочный профиль сайта',
            'description' => 'Чем больше других сайтов ссылается на ваш сайт - тем лучше. Моя задача - обеспечить увеличение ссылок на ваш сайт с качественных, трастовых ресурсов.'
        ],
        [
            'name' => 'Провожу<br> веб-аналитику',
            'description' => 'Эффективность работ важно измерять цифрами. Будем следить за динамикой изменения позиций сайта по запросам, и увеличением траффика.'
        ],
        [
            'name' => 'Ежемесячные подробные отчёты',
            'description' => 'По каждому пункту работ я составляю подробное описание: что делаем, зачем, как оно повлияет на продвижение. Возможны zoom-созвоны, встречи для более подробного обсуждения всех работ.'
        ],
    ]
]) ?>
<?php view('about', ['addSectionClass' => 'bg-2', 'addAboutClass' => 'about_dark']) ?>
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
