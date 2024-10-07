<?php
$breadcrumbs = ['/seo/' => 'SEO-продвижение'];
require_once $_SERVER['DOCUMENT_ROOT'] . '/dev/tools/core.php';
?>
<?php getHeader(); ?>
<?php view('hero/inner', [
    'title' => '<span class="color">SEO-<span class="shuffle-text" data-word="продвижение">продвижение</span></span> сайтов для бизнеса<br> в Сургуте',
    'subtitle' => 'Проведу аудит сайта, оценю его перспективы роста в органической выдаче. Учту все нюансы продвижения сайта именно в Сургуте.',
    'imgSrc' => ASSETS_PATH . 'images/hero/seo.svg',
    'imgAlt' => 'SEO-продвижение сайтов для бизнеса в Сургуте',
    'imgClass' => 'hero__img_seo'
]) ?>
<?php view('info', [
    'title' => '<span class="color">Почему</span> я беру<br>на продвижение <br><span class="color">не все сайты</span><br> в Сургуте?',
    'list' => [
        [
            'img' => ASSETS_PATH . 'images/info/seo/1.svg',
            'title' => 'Низкий спрос',
            'preview' => 'SEO-продвижение - это привлечение на сайт клиентов по уже готовому, сформированному спросу.',
            'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis officia labore et, sunt consequuntur repudiandae cupiditate facilis nam ipsam neque.'
        ],
        [
            'img' => ASSETS_PATH . 'images/info/seo/2.svg',
            'title' => 'Плохое качество сайта',
            'preview' => 'Поисковые системы “ставят в ТОП” сайты хорошего качества, которые удобны для пользователя',
            'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis officia labore et, sunt consequuntur repudiandae cupiditate facilis nam ipsam neque.'
        ],
        [
            'img' => ASSETS_PATH . 'images/info/seo/3.svg',
            'title' => 'Особенность поисковой выдачи в вашей тематике',
            'preview' => 'Если ваша тематика сверхконкурентная, а поисковая выдача занята большими федеральными компаниями или агрегаторами, то попасть в ТОП-10 будет сложно.',
            'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis officia labore et, sunt consequuntur repudiandae cupiditate facilis nam ipsam neque.'
        ],
    ]
]) ?>
<?php view('promo', [
    'title' => 'Во всех остальных случаях буду рад вам помочь ',
    'subtitle' => 'Оставляйте заявку, и мы вместе подумаем<br>  над реализацией ваших целей.',
    'class' => 'promo_seo'
]) ?>
<?php view('services/seo') ?>
<?php view('price', ['list' => [
    ['name' => 'Разработка сайта на Tilda', 'price' => 'от 40 000 ₽'],
    ['name' => 'Разработка дизайна сайта', 'price' => 'от 40 000 ₽'],
    ['name' => 'Разработка сайта на 1С-Битрикс', 'price' => 'от 40 000 ₽'],
    ['name' => 'Проектирование структуры сайта', 'price' => 'от 15 000 ₽'],
    ['name' => 'Доработка сайтов', 'price' => 'от 3 000 ₽'],
    ['name' => 'Корректировка готовых сайтов', 'price' => 'от 4 000 ₽'],
]]) ?>
<?php view('works', [
    'title' => '<span class="color">Какие работы я делаю</span> в рамках комплексного SEO-продвижения',
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
